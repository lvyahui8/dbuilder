<?php return array (
  'data_source' => 'core',
  'table' => 'demo',
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
    'name' => 
    array (
      'label' => '名字',
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
    'ipaddr' => 
    array (
      'label' => 'IP地址',
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
    'birthday' => 
    array (
      'label' => '生日',
      'form' => 
      array (
        'show' => true,
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
        'type' => '',
        'table' => 'category',
        'foreign_key' => 'id',
        'show' => 'id',
        'as' => '',
      ),
    ),
    'password' => 
    array (
      'label' => '密码',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'password',
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
    'sex' => 
    array (
      'label' => '性别',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'radio',
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
    'note' => 
    array (
      'label' => '个人简介',
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
    'avatar' => 
    array (
      'label' => '头像',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'file',
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
    'addr' => 
    array (
      'label' => '住址',
      'form' => 
      array (
        'show' => true,
        'hidden' => false,
        'type' => 'custom',
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
    'name' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'email' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'ipaddr' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'birthday' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'password' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'sex' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'note' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'avatar' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
    'addr' => 
    array (
      'type' => '',
      'table' => '',
      'foreign_key' => '',
      'show' => '',
      'as' => '',
    ),
  ),
);