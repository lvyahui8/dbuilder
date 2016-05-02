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
}