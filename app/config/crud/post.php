<?php return array (
  'data_source' => 'core',
  'table' => 'post',
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'form' => 
      array (
        'show' => true,
        'hidden' => true,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => '',
        'foreign_key' => '',
        'show' => '',
        'as' => '',
      ),
    ),
    'title' => 
    array (
      'label' => '标题',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => '',
        'foreign_key' => '',
        'show' => '',
        'as' => '',
      ),
    ),
    'short' => 
    array (
      'label' => '摘要',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'textarea',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => 'category',
        'foreign_key' => 'id',
        'show' => 'id',
        'as' => '',
      ),
    ),
    'content' => 
    array (
      'label' => '内容',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'wysiwyg',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => false,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => 'category',
        'foreign_key' => 'id',
        'show' => 'id',
        'as' => '',
      ),
    ),
    'view_ct' => 
    array (
      'label' => '查看次数',
      'form' => 
      array (
        'show' => false,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => '',
        'foreign_key' => '',
        'show' => '',
        'as' => '',
      ),
    ),
    'created_at' => 
    array (
      'label' => '创建时间',
      'form' => 
      array (
        'show' => false,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => false,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => '',
        'table' => '',
        'foreign_key' => '',
        'show' => '',
        'as' => '',
      ),
    ),
    'updated_at' => 
    array (
      'label' => '更新时间',
      'form' => 
      array (
        'show' => false,
        'hidden' => false,
        'type' => 'date',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
          'type'    =>  'belongsTo',
        'table' => 'category',
        'foreign_key' => 'id',
        'show' => 'id',
        'as' => '',
      ),
    ),
    'category_id' => 
    array (
      'label' => '栏目',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'select',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
      'relation' => 
      array (
        'type' => 'belongsTo',
        'table' => 'category',
        'foreign_key' => 'id',
        'show' => 'title',
        'as' => 'category_title',
      ),
    ),
  ),
  'list_options' => 
  array (
    'page' => 10,
    'create' => true,
    'update' => true,
    'delete' => true,
  ),
  'form_options' => 
  array (
    'layout' => 
    array (
      'cols' => 12,
      'label_cols' => 1,
      'input_cols' => 11,
    ),
  ),
  'relations' => 
  array (
    'id' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'title' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'short' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'content' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'view_ct' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'created_at' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'updated_at' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'category_id' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
  ),
);