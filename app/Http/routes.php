<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    
    //View all product
    Route::get('/','WelcomeController@index');
    Route::get('/detail/{id}','WelcomeController@detail');
    Route::get('/product','WelcomeController@product');

    Route::auth();
    //Route for normal user
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboards', 'DashboardController@index');
    });
    //Route for Admin
    Route::group(['middleware' => ['admin']], function(){
        Route::resource('flower','FlowerController');
        Route::get('/flowers', 'FlowerController@index');
        Route::post('/flower', 'FlowerController@store');
        Route::delete('/flower/{flower}', 'FlowerController@destroy');
        Route::get('/dashboard', 'admin\AdminController@index');
    });
    
});






