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
        return array_merge( array(
            'required'  =>  '必填',
            'email'     =>  '邮箱',
            'remote'    =>  '后端异步校验',
            'url'       =>  'URL地址',
            'date'      =>  '日期',
            'number'    =>  '合法数字',
            'digits'    =>  '整数',
            'equalTo'   =>  '相同值',
            'maxlength' =>  '最大长度',
            'minlength' =>  '最小长度',
            'rangelength'   =>  '长度区间',
            'min'       =>  '最小值',
            'max'       =>  '最大值',
            'range'     =>  '大小区间'
        ),self::masks());
    }

    public static function masks(){
        return array(
            'ipaddr'    =>  'IP地址',
        );
    }
}