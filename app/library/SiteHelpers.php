<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/9
 * Time: 8:46
 */
class SiteHelpers
{
    public static function loadDataSources()
    {
//        return  array_merge(array(
//            'core'  =>  Config::get('database.connections.core')
//        ),Config::get('datasource'));
        return Config::get('datasource');
    }

    public static function supportDrivers()
    {
        return array(
            'mysql'  => 'MySQL',
            'pgsql'  => 'PostGreSQL',
            'sqlsrv' => 'SQL Server',
            'sqlite' => 'Sqlite',
        );
    }

    public static function supportFormControls()
    {
        return array(
            'text'     => '文本框（text）',
            'textarea' => '多行文本框（textarea）',
            'date'     => '日期（date）',
            'wysiwyg'  => '富文本（wysiwyg）',
            'select'   => '下拉框（select）',
            'radio'    => '单选框（radio）',
            'checkbox' => '复选框（checkbox）',
//            'ipaddr'   => 'IP地址（ipaddr）',
            'file'     => '文件（file）',
            'hidden'   => '隐藏（hidden）',
            'password' =>   '密码（password）',
            'custom'   => '自定义（custom）',
        );
    }

    public static function supportSearchOperators()
    {
        return array(
            '='    => '=',
            '>='   => '&gt;=',
            '<='   => '&lt;=',
            '>'    => '&gt;',
            '<'    => '&lt;',
            '!='   => '=',
            'like' => 'like',
        );
    }


    public static function supportRelations()
    {
        return array(
            'hasMany'       => '一对多（hasMany）',
            'hasOne'        => '一对一（hasOne）',
            'belongsTo'     => '所属（belongsTo）',
            'belongsToMany' => '多对多（belongsToMany）',
        );
    }

    public static function blend($str, $data)
    {
        $src = $rep = array();

        foreach ($data as $k => $v) {
            $src[] = "{" . $k . "}";
            $rep[] = $v;
        }

        if (is_array($str)) {
            foreach ($str as $st) {
                $res[] = trim(str_ireplace($src, $rep, $st));
            }
        } else {
            $res = str_ireplace($src, $rep, $str);
        }

        return $res;

    }

    public static function saveArrayToFile($file, $array)
    {
        $content = '<?php return ' . var_export($array, true) . ';';
        file_put_contents($file, $content);
    }

    public static function reducCase($str)
    {
        return strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '-', $str));
    }

    public static function saveDataSources($dataSources)
    {
        self::saveArrayToFile(app_path('config/datasource.php'), $dataSources);
    }


    public static function cleanStorage($dir)
    {
        $viewPath = storage_path($dir);
        /*
        $views = scandir($viewPath);
        foreach($views as $view){
            if($view !== '.' && $view !== '..'){
                //echo 'delete view file: '.$view.' <br/>';
                $file = $viewPath.'/'.$view;
                if(!is_dir($file)){
                    unlink($file);
                }else delFile($file);
            }
        }
        */
        FileUtils::emptyPath($viewPath);
    }

    public static function inputMask($rule){
        $masks = Supports::masks();
        if(isset($masks[$rule])){
            return 'data-mask="'.$rule.'"';
        }
        return null;
    }

    public static function inputValidate($rule){
        $rules = Supports::rules();
        if(isset($rules[$rule])){
            return 'data-validate="'.$rule.'"';
        }
        return null;
    }
}