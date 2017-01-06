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

    Route::auth();   //认证系统
    Route::get('/', 'HomeController@index');  //首页
    //新闻
    Route::group(['prefix'=>'news','middleware'=>['auth']],function (){
        Route::get('/', 'NewsController@list'); //新闻列表
        Route::get('detail/{id}', 'NewsController@detail');   //新闻详情
    });
    //用户
    Route::group(['prefix'=>'user','middleware'=>['auth']],function (){
        Route::get('/','UserController@list');
        Route::get('/add','UserController@add');
        Route::post('/add','UserController@add');
        Route::get('/list','UserController@list');
    });
});

//ajax请求
Route::group([ 'middleware'=>['ajax']],function (){
    Route::get('/user/ajaxlist','UserController@ajaxlist');
});



