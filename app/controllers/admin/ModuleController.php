<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/7
 * Time: 15:28
 */

namespace admin;


use SiteHelpers;
use BaseModel;
use Module;

class ModuleController extends AdminController
{
    protected function beforeEdit(&$data)
    {
        $data ['dataSources']  = SiteHelpers::loadDataSources();
    }

    protected function afterSave($model)
    {
        /* 生成代码文件 */
        $codes = array(
            'moduleName'        =>  $model->name,
            'moduleTitle'       =>  $model->title,
            'tablePrimaryKey'   =>  BaseModel::findPrimarykey($model->db_table,$model->db_source === 'core' ? 'mysql' : $model->db_source),
            'moduleNote'        =>  $model->note,
            'date'              =>  date('Y-m-d'),
            'dbSource'          =>  $model->db_source,
            'dbTable'           =>  $model->db_table,
        );
        $controller = file_get_contents(app_path('template').'/controller.tpl');
        $model = file_get_contents(app_path('template').'/model.tpl');
        $buildController = SiteHelpers::blend($controller,$codes);
        $buildModel = SiteHelpers::blend($model,$codes);
        file_put_contents(  app_path()."/admin/controllers/{$codes['moduleName']}Controller.php" , $buildController) ;
        file_put_contents(  app_path()."/models/{$codes['moduleName']}.php" , $buildModel) ;

        /* 更新路由 */
    }

    protected function beforeDelete($id)
    {
        $module = Module::find($id);
        $moduleName = $module->name;
        $this->removeFiles($moduleName);
    }

    public function removeFiles($moduleName){
        $controller = app_path('admin/controllers')."/{$moduleName}Controller.php";
        if(file_exists($controller)){
            unlink($controller);
        }
        $model = app_path('models')."/{$moduleName}.php";
        if(file_exists($model)){
            unlink($model);
        }
    }
}