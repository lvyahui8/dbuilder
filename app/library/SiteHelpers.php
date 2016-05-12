<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/9
 * Time: 8:46
 */
class SiteHelpers
{
    public static function loadDataSources(){
//        return  array_merge(array(
//            'core'  =>  Config::get('database.connections.core')
//        ),Config::get('datasource'));
        return Config::get('datasource');
    }

    public static function supportDrivers(){
        return array(
            'mysql' =>  'MySQL',
            'pgsql' =>  'PostGreSQL',
            'sqlsrv'=>  'SQL Server',
            'sqlite'=>  'Sqlite',
        );
    }

    public static function supportFormControls(){
        return array(
            'text'  =>  '文本框（text）',
            'textarea'  =>  '多行文本框（textarea）',
            'wyswyg'    =>  '富文本（wyswyg）',
            'select'    =>  '下拉框（select）',
            'radio'     =>  '单选框（radio）',
            'checkbox'  =>  '复选框（checkbox）',
            'file'      =>  '文件（file）',
            'hidden'    =>  '隐藏（hidden）',
            'custom'    =>  '自定义（custom）',
        );
    }

    public static function getDataSource($rawName){
        return $rawName === 'core'  ?   'mysql' : $rawName;
    }

    public static function blend($str,$data) {
        $src = $rep = array();

        foreach($data as $k=>$v){
            $src[] = "{".$k."}";
            $rep[] = $v;
        }

        if(is_array($str)){
            foreach($str as $st ){
                $res[] = trim(str_ireplace($src,$rep,$st));
            }
        } else {
            $res = str_ireplace($src,$rep,$str);
        }

        return $res;

    }

    public static function saveArrayToFile($file,$array){
        $content = '<?php return '.var_export($array,true).';';
        file_put_contents($file,$content);
    }

    public static function reducCase($str){
        return strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '-', $str));
    }

    public static function saveDataSources($dataSources)
    {
        self::saveArrayToFile(app_path('config/datasource.php'),$dataSources);
    }
}