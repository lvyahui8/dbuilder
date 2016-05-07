<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/7
 * Time: 15:35
 */

namespace admin;
use BaseModel;
use SiteHelpers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
class DataSourceController extends AdminController
{
    public function getList()
    {
        $datasources = Config::get('datasource');
        $this->makeView(array(
            'datasources'   =>  $datasources,
        ));
    }

    public function getTables(){
        $dataSourceName = Input::get("data_source");
        $dataSources = SiteHelpers::loadDataSources();
        $dataSource = $dataSources[$dataSourceName];
        $tables = BaseModel::getTableList($dataSource['database'],$dataSourceName === 'core' ? 'mysql' : $dataSourceName);
        return Response::json(array(
            'success'   =>  true,
            'data'      =>  array(
                'tables'    =>  $tables
            )
        ));
    }
}