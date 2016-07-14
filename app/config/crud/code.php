<?php return array(
    'data_source'  => 'core',
    'table'        => 'code',
    'fields'       =>
        array(
            'id'         =>
                array(
                    'label'    => 'ID',
                    'form'     =>
                        array(
                            'show'          => true,
                            'hidden'        => true,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
            'title'      =>
                array(
                    'label'    => '标题',
                    'form'     =>
                        array(
                            'show'          => true,
                            'hidden'        => false,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
            'body'       =>
                array(
                    'label'    => '代码',
                    'form'     =>
                        array(
                            'show'          => true,
                            'hidden'        => false,
                            'type'          => 'textarea',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => false,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => 'category',
                            'foreign_key' => 'id',
                            'show'        => 'id',
                            'as'          => '',
                        ),
                ),
            'lang'       =>
                array(
                    'label'    => '语言',
                    'form'     =>
                        array(
                            'show'          => true,
                            'hidden'        => false,
                            'type'          => 'select',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                            'options'       =>
                                array(
                                    'c++'        => 'c++',
                                    'java'       => 'java',
                                    'php'        => 'php',
                                    'c#'         => 'c#',
                                    'python'     => 'python',
                                    'shell'      => 'shell',
                                    'lua'        => 'lua',
                                    'javascript' => 'javascript',
                                    'html'       => 'html',
                                    'css'        => 'css',
                                ),
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => 'category',
                            'foreign_key' => 'id',
                            'show'        => 'id',
                            'as'          => '',
                        ),
                ),
            'short'      =>
                array(
                    'label'    => '简介',
                    'form'     =>
                        array(
                            'show'          => true,
                            'hidden'        => false,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
            'view_ct'    =>
                array(
                    'label'    => '阅读次数',
                    'form'     =>
                        array(
                            'show'          => false,
                            'hidden'        => false,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
            'created_at' =>
                array(
                    'label'    => '创建时间',
                    'form'     =>
                        array(
                            'show'          => false,
                            'hidden'        => false,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => false,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
            'updated_at' =>
                array(
                    'label'    => '更新时间',
                    'form'     =>
                        array(
                            'show'          => false,
                            'hidden'        => false,
                            'type'          => 'text',
                            'rule'          => 'required',
                            'ajax_validate' => false,
                            'placeholder'   => '',
                        ),
                    'list'     =>
                        array(
                            'show'   => true,
                            'sort'   => true,
                            'search' => '=',
                            'lookup' => false,
                            'filter' =>
                                array(
                                    'operator' => '>',
                                ),
                        ),
                    'relation' =>
                        array(
                            'type'        => '',
                            'table'       => '',
                            'foreign_key' => '',
                            'show'        => '',
                            'as'          => '',
                        ),
                ),
        ),
    'list_options' =>
        array(
            'page'   => 10,
            'create' => true,
            'update' => true,
            'delete' => true,
        ),
    'form_options' =>
        array(
            'layout' =>
                array(
                    'cols'       => 12,
                    'label_cols' => 1,
                    'input_cols' => 11,
                ),
        ),
    'relations'    =>
        array(
            'id'         =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'title'      =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'body'       =>
                array(
                    'type'        => '',
                    'table'       => 'category',
                    'foreign_key' => 'id',
                    'show'        => 'id',
                    'as'          => '',
                ),
            'lang'       =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'short'      =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'view_ct'    =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'created_at' =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
            'updated_at' =>
                array(
                    'type'        => '',
                    'table'       => '',
                    'foreign_key' => '',
                    'show'        => '',
                    'as'          => '',
                ),
        ),
);