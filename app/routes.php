<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

require_once 'module_routes.php';

Route::get('site/404','SiteController@error404');

Route::controller('site','SiteController');
Route::controller('user','UserController');

Route::group(array('prefix'=>'admin'),function(){
    Route::controller('module','admin\ModuleController');
    Route::controller('data-source','admin\DataSourceController');
    foreach(){

    }
});

