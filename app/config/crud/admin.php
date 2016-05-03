<?php
/**
 * 说明：
 * 1. 以下配置项，不设置便是默认
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/2
 * Time: 12:33
 */

return array(

    /**
     * 所有字段配置
     */
    'fields'    =>  array(
        'field_name' =>  array(
            /* 显示在列表表格的表头的内容，和form控件旁边的内容*/
            'label' =>  '字段中文名',
            /* 字段缺省值 */
            'value' =>  false,
            /* 针对表单的设置 */
            'form'  =>  array(
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
                'placeholder'   =>  'xx',

            ),
            // 针对列表的设置
            'list'  =>  array(
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
            ),

        ),
        // more fields
    ),

    /**
     * 全局form配置，优先级小于字段配置
     */
    'form_options'  =>  array(
        'layout'    =>  array(
            'cols'  =>  12,
            'label_cols' =>  1,
            'input_cols' =>  11,
        ),
    ),

    /**
     * 全局list配置，优先级小于字段配置
     */
    'list_options'  =>  array(
        'page'      =>  10,
        'create'    =>  true,
        'update'    =>  true,
        'delete'    =>  true,
    ),

);