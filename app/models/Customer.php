<?php

/**
 * 客户管理
 * 客户信息管理
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-05-14
 */

class Customer extends BaseModel
{
    protected $connection = 'core';
    protected $table = 'customer';
    protected $primaryKey = 'id';

    /*
    public function formatXXXAttribute(){
        $xxxs = array(
            'qtlogin'   =>  'tencent',
            'notify'    =>  'alibaba',
            'echart'    =>  'baidu',
        );
        return $xxxs[$this->xxx];
    }
    */
}