<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/8
 * Time: 21:27
 */

return array(
    'fields' => array(
        'id'        => array(),
        'name'      => array(
            'label' => 'ModuleKey',
            'form'  => array(),
            'list'  => array(
                'search' => array(),
                'sort'   => false,
            ),
        ),
        'title'     => array(
            'label' => '名称',
        ),
        'note'      => array(
            'label' => '说明',
        ),
        'db_source' => array(
            'label' => '数据源',
            'form'  => array(
                'type'    => 'select',
                'options'   =>  'dataSources',
            ),
            'list'  =>  array(
                'search'    =>  false,
            )
        ),
        'db_table'  =>  array(
            'label' =>  'Module 主表',
            'form'  =>  array(
                'type'  =>  'select',
                'options'   =>  array()
            ),
            'list'  =>  array(
                'search'    =>  false,
            )
        ),
        'db_table_key'  =>  array(
            'label' =>  'Module主表主键',
            'form'  =>  array(
                'value' =>  'id'
            )
        )
    ),

    'form_options' => array(
        'layout' => array(
            'cols'       => 7,
            'label_cols' => 4,
            'input_cols' => 8,
        ),
    ),
    'list_options' => array(),

);