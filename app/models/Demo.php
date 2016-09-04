<?php

/**
 * Demo示例
 * DBuilder的演示GModule
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-05-17
 */

class Demo extends BaseModel
{
    protected $connection = 'core';
    protected $table = 'demo';
    protected $primaryKey = 'id';
    public $timestamps = false;
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