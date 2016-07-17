<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/12
 * Time: 15:35
 */

namespace admin;

use BaseModel;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use SiteHelpers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

use PDOException;
use PDO;
class DDataSourceController extends AdminController
{
    /**
     * 呈现数据源列表
     */
    public function getList()
    {
        $datasources = SiteHelpers::loadDataSources();
        $this->makeView(array(
            'datasources' => $datasources,
        ));
    }

    /**
     * 异步加载某数据源的所有数据表
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTables()
    {
        $dataSourceName = Input::get("data_source");
        $dataSources = SiteHelpers::loadDataSources();

        $dataSource = $dataSources[$dataSourceName];
        $tables = BaseModel::getTableList($dataSource['database'], $dataSourceName);
        return Response::json(array(
            'success' => true,
            'data'    => array(
                'tables'   => $tables,
                'selected' => Input::get('table'),
            ),
        ));
    }

    /**
     * 呈现数据源编辑或者新建FORM
     * @param null $slug
     */
    public function getEdit($slug = null)
    {
        $dataSource = null;
        if ($slug) {
            // 更新
            $dataSource = $slug === 'core' ? Config::get('database.connections.core')
                : Config::get('datasource.' . $slug);
            $dataSource['name'] = $slug;
        } else {
            // 新建
            $dataSource = array(
                'name'     => '',
                'driver'   => 'mysql',
                'host'     => 'localhost',
                'port'     => 3306,
                'database' => '',
                'username' => 'root',
                'password' => '',
                'charset'  =>   'utf8',
                'collation' =>  'utf8_unicode_ci'
            );
        }

        $this->makeView(array(
            'dataSource'    =>  $dataSource
        ));
    }

    /**
     * 测试数据源连接是否可靠
     * @return \Illuminate\Http\JsonResponse
     */
    public function postTest(){
        $success = true;
        try{
            $dsn = Input::get('driver').':'.Input::get('host').':'.Input::get('port').';dbname='.Input::get('database');
            $dbh = new \PDO($dsn,Input::get('username'),Input::get('password'));
//            $connection = new Connection($dbh,Input::get('database'));
//            $key = md5(date("Y-m-d H:i:s"));
//            DB::addConnection($key,$connection);
//            if(!DB::connection($key)->getDatabaseName()){
//                $success = false;
//            }
            $dbh = null;
        }catch(PDOException  $e){
            $success = false;
        }
        return Response::json(array(
            'success'   =>  $success,
        ));
    }

    /**
     * 保存编辑好的数据源信息
     * @param null $primaryKeyValue
     * @return mixed
     */
    public function postEdit($primaryKeyValue = null)
    {
        $dataSources = SiteHelpers::loadDataSources();
        $name = Input::get('name');
        $dataSources[$name] = Input::all();
        SiteHelpers::saveDataSources($dataSources);

        return Redirect::action(get_class($this).'@getList');
    }


    public function getTableFields(){
        $connection = Input::get('connection');
        $table = Input::get('table');

        $rawFields = BaseModel::getTableColumns($table,$connection);

        $fields = array();
        $pri = null;
        foreach($rawFields as $field){
            if($field->Key === 'PRI'){
                $pri = $field->Field;
            }
            $fields [] = $field->Field;
        }

        return Response::json(array(
            'success'   =>  true,
            'data'  =>  array(
                'fields'    =>  $fields,
                'pri'       =>  $pri,
            ),
        ));
    }
}