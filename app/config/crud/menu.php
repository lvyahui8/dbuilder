<?php return array (
    'data_source'   =>  'core',
    'table'         =>  'd_menu',
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
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
        'search' => true,
        'lookup' => false,
        'filter' => 
        array (
          'operator' => '>',
        ),
      ),
      'relation' => 
      array (
      ),
    ),
    'module_id' => 
    array (
      'label' => '关联GModule',
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
        'search' => true,
        'lookup' => false,
        'filter' => 
        array (
          'operator' => '>',
        ),
      ),
      'relation' => 
      array (
      ),
    ),
    'module_name' => 
    array (
      'label' => 'GModule名',
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
        'search' => true,
        'lookup' => false,
        'filter' => 
        array (
          'operator' => '>',
        ),
      ),
      'relation' => 
      array (
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
        'search' => true,
        'lookup' => false,
        'filter' => 
        array (
          'operator' => '>',
        ),
      ),
      'relation' => 
      array (
      ),
    ),
    '_order' => 
    array (
      'label' => '排序值',
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
        'search' => true,
        'lookup' => false,
        'filter' => 
        array (
          'operator' => '>',
        ),
      ),
      'relation' => 
      array (
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