<?php
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
Route::group(['middleware' => ['web']], function ()
{
    //认证系统
    Route::auth();
    //首页
    Route::get('/', 'HomeController@index');
    //新闻
    Route::group(['prefix'=>'news','middleware'=>['authset']],function (){
        //新闻列表
        Route::get('/', 'NewsController@list');
        //新闻详情
        Route::get('detail/{id}', 'NewsController@detail');
    });
    //用户
    Route::group(['prefix'=>'user','middleware'=>['authset']],function (){
        Route::get('/','UserController@list');
        Route::get('/add','UserController@add');
        Route::post('/add','UserController@add');
        Route::get('/list','UserController@list');
    });
});

//用户ajax请求
Route::group([ 'middleware'=>['ajax']],function (){
    Route::get('/user/ajaxlist','UserController@ajaxlist');
});



