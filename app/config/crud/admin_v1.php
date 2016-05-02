<?php
/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/2
 * Time: 12:33
 */

return array(
    'form' =>  array(
        'category_id'   =>  array(
            'label' =>  '栏目',
            'type'  =>  'select',
            'rule'  =>  'email',
            'placeholder'   =>  '控件提示语',
            'options'   =>  function(){
                return array();
            }
        ),
    ),
    'form_options'  =>  array(
        'layout'    =>  array(
            'cols'  =>  12,
            'label_cols' =>  1,
            'input_cols' =>  11,
        ),
    ),
    'list'  =>  array(

    ),
    'list_options'  =>  array(
        'filter'    =>  array(
            'category_id'   =>  array(),
            'title' =>  array(),
            'short' =>  array(),
            'view_ct'   =>  array(
                'operator'  =>  '>'
            )
        ),
        'itemsPerPage'=>10,
        'create'    =>  true,
        'update'    =>  true,
        'delete'    =>  true,
    ),
);