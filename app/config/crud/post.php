<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/2
 * Time: 13:26
 */

return array(
    'fields' =>  array(
        'category_id'   =>  array(
            'label' =>  '栏目',

            'form'  =>  array(
                'type'  =>  'select',
                /* options 不指定，那么options将按tranlate中字段的外键关系加载 */
                'options'   =>  null,
            ),

            'list'  =>  array(
            ),

        ),
        'title' =>  array(
            'label' =>  '标题'
        ),
        'short' =>  array(
            'label' =>  '摘要',
            'type'  =>  'textarea',
        ),
        'content'   =>  array(
            'label' =>  '正文',
            'form'  =>  array(
                'type'  =>  'wysiwyg',
            ),
            'list'  =>  array(
                'show'  =>  false,
            )
        ),
    ),

    'translate' =>  array(
        'category_id'   =>   array(
            'table' =>  'category',
            'compare'   =>  'id',
            'to'    =>  'title',
            /* 查询的sql 将使用这个as 表示 table.to*/
            'as'    =>  'category_title',
        )
    ),

    'form_options'    =>  array(

    ),
    'list_options'    =>  array(

    ),

);