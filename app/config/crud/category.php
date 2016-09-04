<?php return array (
  'data_source' => 'core',
  'table' => 'category',
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
      'label' => '栏目名',
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
    'level' => 
    array (
      'label' => '级别',
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
    'weight' => 
    array (
      'label' => '权重',
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
    'parent_id' => 
    array (
      'label' => '父栏目',
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
    'post_ct' => 
    array (
      'label' => '文章数',
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
    'level' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'weight' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'parent_id' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'post_ct' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
  ),
);