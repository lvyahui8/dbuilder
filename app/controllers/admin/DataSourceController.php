<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/7
 * Time: 15:35
 */

namespace admin;

use BaseModel;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use SiteHelpers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

use PDOException;
use PDO;
class DataSourceController extends AdminController
{
    public function getList()
    {
        $datasources = SiteHelpers::loadDataSources();
        $this->makeView(array(
            'datasources' => $datasources,
        ));
    }

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
            );
        }

        $this->makeView(array(
            'dataSource'    =>  $dataSource
        ));
    }

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