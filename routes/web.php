<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*Route::get('/users/{id}', function($id){
    return 'This is user '.$id;
});*/

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/

/*Route::get('/', function(){
    return 'Hello World';
});*/

//users folder
Route::get('/users', 'MainController@getUsers');

//index
Route::get('/', 'MainController@index');
Route::post('/', 'MainController@add');
Route::get('/login', 'LoginController@login');
Route::get('/{id}', 'MainController@show');
Route::put('/{id}', 'MainController@update');
Route::patch('/{id}', 'MainController@update');
Route::delete('/{id}', 'MainController@delete');
