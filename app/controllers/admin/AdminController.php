<?php

namespace admin;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class AdminController extends \BaseController
{
    protected $layout = 'layouts.admin.main';

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        View::share('stdName',$this->getStdName());
        View::share('routeMethod',$this->routeMethod());
        $this->assignModel($this->model);

        View::share('config',$this->savedConfig);
    }

    public function getList(){
        $models = $this->paginateModels();

        $this->makeView(array(
            'models'  =>  $models,
            $this->getStdName().'s' =>  $models,
        ),'admin.core.list');
    }

    public function getEdit($id = null)
    {
        if($id){
            $this->model = $this->model->find($id);
        }
        $data = array(
            'id' => $id,
            'model'   =>  $this->model,
            $this->modelName=>$this->model,
        );
        $this->makeView($data,'admin.core.form');
    }

    protected function config(){
        $config = 'crud/'.$this->getStdName();
        if(!file_exists(app_path('config/').$config.'.php')){
            $config = 'crud/admin';
        }
        return Config::get($config);
    }

    protected function assignModel($model)
    {
        $this->model = $model;

        $config = $this->config();
        $defaultConfig = Config::get('crud/admin');
        /* 将默认参数传递给module config */
        foreach($config['fields']   as $field => &$fieldConfig){
            if(isset($fieldConfig['value'])){
                $this->model->$field = $fieldConfig['value'];
            }
            $fieldConfig['form'] = array_merge(
                $defaultConfig['fields']['field_name']['form'],
                isset($fieldConfig['form']) ? $fieldConfig['form'] : array()
            );
            $fieldConfig['list'] = array_merge(
                $defaultConfig['fields']['field_name']['list'],
                isset($fieldConfig['list']) ? $fieldConfig['list'] : array()
            );
        }

        $config['list_options'] = array_merge(
            $defaultConfig['list_options'],
            isset($config['list_options']) ? $config['list_options'] : array()
        );

        $config['form_options'] = array_merge(
            $defaultConfig['form_options'],
            isset($config['form_options']) ? $config['form_options'] : array()
        );

        $this->savedConfig = $config;
    }

    protected function paginateModels()
    {
        $models = array();
        if($this->model){
            $query = $this->model->newQuery();
            $selects = array($this->model->getTable().'.*');
            foreach($this->savedConfig['translate'] as $field=>&$params){
                $query->join($params['table'],$params['table'].'.'.$params['compare'],'=',$this->model->getTable().'.'.$field);
                if(!isset($params['as'])){
                    $params['as'] = $params['table'].'_'.$params['to'];
                }
                $selects[] = $params['table'].'.'.$params['to'] . ' as '.$params['as'];
            }
            $query->select($selects);
            $this->handleListQuery($query);
            $page = Input::has('_page') ? Input::get('_page') : 10;
            $models = $query->paginate($page);
        }
        return $models;
    }


    public function postEdit($id = null){
        if ($id || Input::has('id'))
        {
            $this->model = $this->model->find(Input::has('id') ? Input::get('id') : $id);
        }
        $resp = Redirect::action(get_class($this).'@getEdit', array('id'=>Input::get('id')))->withInput();
        $relations  = array();
        $items = $this->savedConfig['items'];
        foreach($items as $field => $item){
            $value  = Input::get($field);
            if($item['save'] && $item['type'] !== 'relation'){
                $this->model->$field = $value;
            }else if($item['save']){
                if(is_array($value)){
                    foreach($value as $v){
                        $relations[$field][] = $this->model->$field()->getRelated()->find($v);
                    }
                }else{
                    $relations[$field][] =
                        $this->model->$field()->getRelated()->find($value);
                }
            }
        }

        if($this->beforeSave($this->model,$relations) && $this->model->save()){
            $resp = Redirect::action(get_class($this).'@getList')->withMessage('save success!');
        }
        return $resp;
    }

    public function getIndex()
    {
        $this->makeView(null,'admin.index');
    }

    public function getDelete($id){
        $this->beforeDelete($id);
        $this->model->where('id',$id)->delete();
        return Redirect::action(get_class($this).'@getList');
    }

    public function missingMethod($parameters = array())
    {
        //
        $this->makeView(null,'site.404');
    }

    protected function handleListQuery(&$query)
    {
        if(isset($this->savedConfig['list_options']) && isset($this->savedConfig['list_options']['filters'])){
            $filters = array_intersect_key($this->savedConfig['list_options']['filters'],Input::all());
            foreach($filters as $field=>$option){
                $value = Input::get($field);
                if($value !== ''){
                    if(isset($option['operator'])){
                        if($option['operator'] === 'like'){
                            $value = '%'.$value.'%';
                        }
                        $query = $query->where($field,$option['operator'],$value);
                    }else{
                        $query = $query->where($field,$value);
                    }
                }
            }
        }
    }

    protected function beforeDelete($id)
    {

    }
}
