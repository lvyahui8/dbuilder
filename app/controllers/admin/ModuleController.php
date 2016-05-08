<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/7
 * Time: 15:28
 */

namespace admin;

define('MODULE_ROUTES', json_encode(include(app_path() . '/module_routes.php')));

use SiteHelpers;
use BaseModel;
use Module;
use ConfigUtils;
use Illuminate\Support\Facades\Input;

class ModuleController extends AdminController
{
    protected function beforeEdit(&$data)
    {
        $data ['dataSources'] = SiteHelpers::loadDataSources();
        if($data['model']->id){
            $data ['moduleConf'] = ConfigUtils::get($data['model']->name);
        }
    }

    protected function afterSave($module)
    {
        /* 生成代码文件 */
        $codes = array(
            'moduleName'      => $module->name,
            'moduleTitle'     => $module->title,
            'tablePrimaryKey' => BaseModel::findPrimarykey($module->db_table, $module->db_source === 'core' ? 'mysql' : $module->db_source),
            'moduleNote'      => $module->note,
            'date'            => date('Y-m-d'),
            'dbSource'        => SiteHelpers::getDataSource($module->db_source),
            'dbTable'         => $module->db_table,
        );
        $this->removeFiles($codes['moduleName']);

        $controller = file_get_contents(app_path('template') . '/controller.tpl');
        $model = file_get_contents(app_path('template') . '/model.tpl');
        $buildController = SiteHelpers::blend($controller, $codes);
        $buildModel = SiteHelpers::blend($model, $codes);
        file_put_contents(app_path() . "/controllers/admin/{$codes['moduleName']}Controller.php", $buildController);
        file_put_contents(app_path() . "/models/{$codes['moduleName']}.php", $buildModel);

        /* 生成默认module Configuration*/
        $moduleConfs = $this->buildConfiguration($module->db_table,$module->db_source);
        SiteHelpers::saveArrayToFile(app_path('config/crud').snake_case($codes['moduleName']).'.php',$moduleConfs);
        /* 更新路由 */
        $moduleRoutes = json_decode(MODULE_ROUTES, true); //require(app_path().'/module_routes.php');
        if (is_array($moduleRoutes)) {
            $moduleRoutes[SiteHelpers::linkCase($codes['moduleName'])] = 'admin\\'."{$codes['moduleName']}Controller" ;
            SiteHelpers::saveArrayToFile(app_path() . '/module_routes.php', $moduleRoutes);
        }
    }

    protected function beforeDelete($id)
    {
        $module = Module::find($id);
        $moduleName = $module->name;
        $this->removeFiles($moduleName);
    }

    public function removeFiles($moduleName)
    {
        $controller = app_path('admin/controllers') . "/{$moduleName}Controller.php";
        if (file_exists($controller)) {
            unlink($controller);
        }
        $model = app_path('models') . "/{$moduleName}.php";
        if (file_exists($model)) {
            unlink($model);
        }
        $moduleConf = app_path('config/crud/').snake_case($moduleName).'.php';
        if(file_exists($moduleConf)){
            unlink($moduleConf);
        }
    }

    private function buildConfiguration($table,$connection)
    {
        $rawColumns = BaseModel::getTableColumns($table,SiteHelpers::getDataSource($connection));
        $fields = ConfigUtils::build($rawColumns);
        return array(
            'fields'    =>  $fields
        );
    }

    public function getFieldsConfig(){
        $filedsConfig = array();
        if(Input::has('module_name')){
            $filedsConfig = ConfigUtils::get(Input::get('module_name'))['fields'];
        }else{
            $table = Input::get('table');
            $connection = Input::get('connection');

            $filedsConfig = $this->buildConfiguration($table,$connection)['fields'];
        }

        $resp = $this->makeView(array(
            'fieldsConfig'  =>  $filedsConfig,
        ));
        if($resp){
            return $resp;
        }
    }
}