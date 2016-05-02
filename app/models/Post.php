<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/2
 * Time: 13:31
 */
class Post extends BaseModel
{
    protected $table = 'post';

    public static function filters(){
        return array(
            'category_id'   =>  array(),
            'title' =>  array(),
            'short' =>  array(),
            'view_ct'   =>  array(
                'operator'  =>  '>'
            )
        );
    }


}