<?php

use Illuminate\Support\Facades\Config;
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/10
 * Time: 10:47
 */
class ConfigUtils
{
    public static function get($moduleName){
        $config = 'crud/'.snake_case($moduleName);
        if(!file_exists(app_path('config/').$config.'.php')){
            $config = 'crud/admin';
        }
        $config = Config::get($config);

        $defaultConfig = Config::get('crud/admin');
        $relations = array();

        /* 将默认参数传递给module config */
        foreach($config['fields']   as $field => &$fieldConfig){
            $fieldConfig['form'] = array_merge(
                $defaultConfig['fields']['field_name']['form'],
                isset($fieldConfig['form']) ? $fieldConfig['form'] : array()
            );
            $fieldConfig['list'] = array_merge(
                $defaultConfig['fields']['field_name']['list'],
                isset($fieldConfig['list']) ? $fieldConfig['list'] : array()
            );
            if(isset($fieldConfig['relation']) && !empty($fieldConfig['relation'])){
                $relations[$field] = $fieldConfig['relation'];
            }
        }
        $config['list_options'] = array_merge(
            $defaultConfig['list_options'],
            isset($config['list_options']) ? $config['list_options'] : array()
        );

        $config['form_options'] = array_merge(
            $defaultConfig['form_options'],
            isset($config['form_options']) ? $config['form_options'] : array()
        );

        /* 将字段的relation汇聚出来，是为了后面的代码方便，同时减少循环 */
        $config['relations'] = $relations;

        return $config;
    }

    public static function build($rawColumns){
        $fields = array();
        foreach($rawColumns as $column){
            $fields[$column->Field] = array(
                'label' =>  strtoupper($column->Field),
            );
//            $form = $list = $relation = array();
            $form = self::getDefaultForm();
            $list = self::getDefaultList();
            $relation = array();
            /* 主键默认隐藏在表中在*/
            if($column->Key === 'PRI'){
                $form['hidden'] = true;
            }
//            /* 非必须字段默认不出现在表单中 */
//            if($column->Null === 'NO'){
//                $form['show'] = false;
//            }

            $fields[$column->Field]['form'] = $form;
            $fields[$column->Field]['lsit'] = $list;
            $fields[$column->Field]['relation'] = $relation;
        }
        return $fields;
    }

    public static function getDefaultForm(){
        return array(
            'show'  =>  true,
            'hidden'    =>  false,
            /*
             * 字段对应表单的控件类型，默认text，
             * 还支持常用的控件类型
             * textarea
             * radio
             * checkbox
             * number
             * ipaddr
             * wyswyg
             * select
             * date
             * file
             * 以及自定义类型
             * */
            'type'  =>  'text',
            /*
            'type'  =>  array(
                'select'    =>  array(
                    'options'   =>  function(){
                        return array();
                    }
                ),
            ),
            'type'  =>  array(
                'radio'     =>  array(),
            ),
            */
            /* 提交表单后的验证规则 */
            'rule'  =>  'required',
            'ajax_validate' =>  false,
            'placeholder'   =>  '',
        );
    }

    public static function getDefaultList(){
        return array(
            /* 字段在列表是否显示，默认为显示 */
            'show'  =>  true,
            /* 字段是否可以排序，默认不能排序 */
            'sort'  =>  true,
            /* 是否能够按这个字段搜索 */
            'search'    =>  true,
            /* 字段进行翻译，比如栏目Id字段，一般要转成栏目名称显示 */
            'lookup'    =>  false,
            /* 字段是否进行筛选 */
            'filter'    =>  array(
                /* 过滤方法操作符 */
                'operator'  =>  '>',
            ),
        );
    }
}