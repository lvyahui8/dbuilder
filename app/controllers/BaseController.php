<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
class BaseController extends Controller
{

    protected $layout = 'layouts.site';

    protected $data = array();

    protected $model = null;

    protected $modelName = '';

    protected $stdName = null;

    protected $routeParams = false;
    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    protected $savedConfig = array();

    protected $breadcrumbs = array();


    public function __construct()
    {
        if(!$this->modelName){
            $this->modelName = $this->getStdName();
        }
        if(class_exists(ucfirst($this->modelName))){
            $this->model = new $this->modelName;
        }
    }

    public function getStdName()
    {
        if(!$this->stdName){
            $className = get_class($this);
            if (preg_match('/([\w]+)Controller$/', $className, $matches))
            {
//                $this->stdName =  camel_case($matches[1]);
                $this->stdName = lcfirst($matches[1]);
            }
            else
            {
                $this->stdName = $className;
            }
        }
        return $this->stdName;
    }


    public function makeView($data = array(),$view = null){
        if(!$view){
            $routeParams = $this->getRouteParams();
            $controllerName = $routeParams['c'];
            $methodName = $routeParams['m'];
            if(preg_match('/^get(.*)$/',$methodName,$matches)){
                $methodName = snake_case(lcfirst($matches[1]));
            }
            $view = $controllerName.'.'.$methodName;
        }
        if(!is_array($data)){
            $data = array();
        }
        if(Request::ajax()){
            return View::make($view,$data);
        }else{
            $this->layout->nest('content',$view,$data);
            return false;
        }
    }


    public function getRouteParams(){
        if(!$this->routeParams){
            list($class,$method) = explode('@',Route::current()->getActionName());
            $class = str_replace("\\",".",substr($class,0,strrpos($class,'Controller')));
            $names = explode(".",$class);
            foreach ($names as & $name) {
                $name = snake_case($name);
            }
            $class = implode('.',$names);
            $this->routeParams = array(
                'c'    =>  $class,
                'm'        =>  $method
            );
        }

        return $this->routeParams;
    }

    public function getRouteParam($key){
        $routePatams = $this->getRouteParams();
        return $routePatams[$key];
    }

    public function getIndex(){
        return Redirect::action(get_class($this).'@getList');
    }

    protected function paginateModels(){
        $models = array();
        if($this->model){
            $query = $this->model->whereNotNull('id');
            if(isset($this->model->orderBy)){
                $orderBy = $this->model->orderBy;
                $query->orderBy($orderBy['field'],$orderBy['order']);
            }
            else if(!(isset($this->model->timestamps) && !$this->model->timestamps)){
                $query->orderBy('created_at','desc');
            }
            $this->handleListQuery($query);
            $page = Input::has('_page') ? Input::get('_page') : 10;
            $models = $query->paginate($page);
        }
        return $models;
    }

    /**
     * 通用Model列表查询
     * @return bool
     */
    public function getList(){
        $models = $this->paginateModels();
        $data = array(
            'models'    =>  $models,
            $this->modelName.'s'    =>  $models,
            'params'    =>  Input::all()
        );
        $this->beforeList($data);
        $view = $this->makeView($data);
        if($view){
            return $view;
        }
    }

    /**
     * 通用Model查看
     * @param $id
     */
    public function getView($id){
        $model = $this->model->find($id);
        $data = array(
            'model' =>  $model,
            $this->modelName    =>  $model,
        );
        $this->beforeView($data);
        $this->makeView($data);
    }

    /**
     * 通用Model编辑
     * @param $id $id为null表示新建
     */
    public function getEdit($id = null){
        if($id){
            $this->model = $this->model->find($id);
        }
        $data = array('id' => $id,'model'   =>  $this->model,$this->modelName=>$this->model);

        $this->makeView($data);
    }

    /**
     *
     * @param $model
     * @param $relations
     * @return bool
     */
    protected function beforeSave($model, $relations)
    {
        return true;
    }

    protected function beforeList(&$data){

    }

    protected function beforeView(&$data)
    {

    }

    protected function handleListQuery(&$query)
    {
        if($this->model && method_exists($this->model,'filters') ){
            $modelName = $this->modelName;
            $filters = array_intersect_key($modelName::filters(),Input::all());
            foreach($filters as $field=>$option){
                $value = Input::get($field);
                if(isset($option['operator'])){
                    $query = $query->where($field,$option['operator'],$value);
                }else{
                    $query = $query->where($field,$value);
                }
            }
        }
    }
}
