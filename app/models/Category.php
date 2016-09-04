<?php

/**
 * 栏目管理
 * 管理博客栏目
 * 文件由 DBuilder 创建.
 * 作者: lvyahui
 * 日期: 2016-07-16
 */

class Category extends BaseModel
{
    protected $connection = 'core';
    protected $table = 'category';
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