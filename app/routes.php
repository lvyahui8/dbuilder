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

$moduleRoutes = require'module_routes.php';

Route::get('site/404','SiteController@error404');

Route::controller('site','SiteController');
Route::controller('user','UserController');
Route::controller('develop','DevelopController');

Route::group(array('prefix'=>'admin'),function() use($moduleRoutes){
    Route::controller('module','admin\ModuleController');
    Route::controller('data-source','admin\DataSourceController');
    foreach($moduleRoutes as $url => $class){
        Route::controller($url,$class);
    }
});

