<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/10 0010
 * Time: 17:58
 */
class BaseModel extends Eloquent
{
    protected $table = '';
    protected $guarded = array('id');

    public static function getTranslates($translate){
        $rows = DB::table($translate['table'])->select(array($translate['compare'],$translate['to']))->get();
        return $rows;
    }
}