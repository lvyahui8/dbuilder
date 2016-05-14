<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/17
 * Time: 16:44
 */
class Supports
{
    public static function rules(){
        return array(
            'email'     =>  '邮箱',
            'date'      =>  '日期',
            'ipaddr'    =>  'IP地址',
        );
    }
}