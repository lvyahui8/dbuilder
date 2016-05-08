<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/10
 * Time: 8:50
 */
class DevelopController extends BaseController
{
    public function getTestBaseModel(){
        /*getTableColumns*/
        $rawColumns = BaseModel::getTableColumns('customer');
        exit;
    }

    public function getTestSiteHelpers(){
        exit;
    }
}