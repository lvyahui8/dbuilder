<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/9 0009
 * Time: 16:21
 */
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SiteController extends BaseController
{
    protected $layout = 'layouts.site';
    /**
     * SiteController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getLogin(){
        $this->makeView();
    }

    public function postSampleLogin(){
        if(Input::get('password') === '123qwe++'){
            Session::put('isAdmin',true);
            return Redirect::intended('');
        }else{
            return Redirect::to('');
        }
    }
    public function postLogin(){
        $user = null;
        Validator::extend('existsUser',function($attribute,$value) use (& $user){
            $user = User::where('name',$value)->first();
            if($user){
                return true;
            }else{
                return false;
            }
        });

        $rules = array(
            'username'  =>  'required|existsUser',
            'password'  =>  'required'
        );
        $messages = array(
            'required'  =>  ':attribute不能为空',
            'exists'    =>  ':attribute不存在',
        );
        $cusAttr = array(
            'username'  =>  '用户名',
            'password'  =>  '密码'
        );
        $validator = Validator::make(Input::all(),$rules,$messages,$cusAttr);
        if($validator->passes()){
            if(Auth::attempt(array('name'=>$user->name, 'password'=>Input::get('password')))){
                return Response::json(array("login_status"=>"success"));
            }
            else{
                return Response::json(array("login_status"=>"invalid"));
            }
        }else{
            return Response::json(array("login_status"=>"invalid"));
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('site/login');
    }

    public function getNoAccess(){
        $this->layout->nest('content','site.noaccess',array());
    }

    public function getIndex(){

        $this->layout->nest('content','site.index');
    }

    public function getDevelop(){
//        return Response::json('devlop');
        echo '开发中';
        exit;
    }

    public function getClear(){
        $viewPath = storage_path('views');
        $views = scandir($viewPath);
        foreach($views as $view){
            if($view !== '.' && $view !== '..'){
                echo 'delete view file: '.$view.' <br/>';
                unlink($viewPath.'/'.$view);
            }
        }
        echo 'clear finish! go <a href="'.URL::to('').'">home</a>';
        exit;
    }

    public function getIsLogin(){
        /*
         * 1： 登錄
         * 0： 未登錄
         */
        return Response::json(intval(!Auth::guest()));
    }

    public function getUserInfo(){
        $respData = array();
        if(!Auth::guest()){
            $user = Auth::user();
            $respData =  array(
                'username'  =>  $user->username,
                'password'  =>  $user->password,
            );
        }
        return Response::json($respData);
    }

    public function error404(){
        $this->makeView();
    }
}