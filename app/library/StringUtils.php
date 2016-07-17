<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/7/17
 * Time: 11:28
 */
class StringUtils
{

    private static $snakeCache = array();
    private static $humpCache = array();

    /**
     * 驼峰字符串转换为蛇形字符串
     * 例如：
     * stringUtils -> string_utils
     * 或者
     * stringUtils -> string-utils
     * @param $str
     * @param string $delimiter
     * @return string
     */
    public static function humpToSnake($str,$delimiter = '_'){

        $key = $str.$delimiter;

        if (isset(static::$snakeCache[$key]))
        {
            return static::$snakeCache[$key];
        }

        if ( ! ctype_lower($str))
        {
            $replace = '$1'.$delimiter.'$2';

            $str = strtolower(preg_replace('/([A-Za-z])([A-Z])/', $replace, $str));
        }

        return static::$snakeCache[$key] = $str;
    }

    /**
     * 蛇形命名转为驼峰命名
     * 例如：string_utils -> stringUtils
     * @param string $str  蛇形字符串
     * @param string $delimiter 分隔符
     * @return mixed
     */
    public static function snakeToHump($str,$delimiter = '_'){
        $key = $str.$delimiter;

        if(isset(static::$humpCache[$key])){
            return static::$humpCache[$key];
        }

        $str = ucwords(str_replace($delimiter, ' ', $str));

        return static::$humpCache[$key] = str_replace(' ', '', $str);
    }

    public static function reducCase($str)
    {
        return strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '-', $str));
    }

}
//echo StringUtils::humpToSnake('Admin.DDataSource','_');