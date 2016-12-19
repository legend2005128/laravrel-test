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
Route::group([ 'namespace'=>'admin'],function (){
    Route::get("index",'IndexController@index');
   // Route::get("login",'IndexController@login');
});


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
    Route::auth();
    Route::get('/', 'HomeController@index');


    //新闻
    Route::group(['prefix'=>'news'],function (){
        //新闻列表
        Route::get('list', 'NewsController@list');
        //新闻详情
        Route::get('detail/{id}', 'NewsController@detail');
    });

});



