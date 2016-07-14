<?php

/**
 * 微码管理
 * 管理代码片段
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-05-15
 */

class Code extends BaseModel
{
    protected $connection = 'core';
    protected $table = 'code';
    protected $primaryKey = 'id';
    public $timestamps = true;
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