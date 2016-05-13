<?php return array (
    'data_source'   =>  'core',
    'table'         =>  'customer',
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
      'relation' => 
      array (
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
      ),
    ),
    'name' => 
    array (
      'label' => '姓名',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '填写客户名称',
      ),
      'relation' => 
      array (
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => 'like',
        'lookup' => false,
      ),
    ),
    'email' => 
    array (
      'label' => '邮箱',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'relation' => 
      array (
      ),
      'list' => 
      array (
        'show' => true,
        'sort' => true,
        'search' => 'like',
        'lookup' => false,
      ),
    ),
    'phone' => 
    array (
      'label' => 'PHONE',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'text',
        'rule' => 'required',
        'ajax_validate' => false,
        'placeholder' => '',
      ),
      'relation' => 
      array (
      ),
      'list' => 
      array (
        'show' => false,
        'sort' => true,
        'search' => '=',
        'lookup' => false,
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
  ),
);