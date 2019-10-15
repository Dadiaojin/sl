<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('detail/{id}',function($id){ return 'detail-'.$id; });
Route::get('detail2/{id?}', function ($id=100){    return 'detail2-'.$id; });
Route::get('detail3/{id}', function ($id){    return 'detail3-'.$id; })->where('id','\d+');
Route::get('detail4/{name}/{id}', function ($name,$id){ return 'detail--'.$name.'--'.$id; })->where(['name'=>'[a-zA-z]','id'=>'\d+']);
Route::group(['prefix'=>'admin'],function(){
    Route::get('detail/{id}',function($id){ return 'detail-'.$id; });
    Route::get('detail2/{id?}', function ($id=100){    return 'detail2-'.$id; });
});

Route::get('index','IndexController@index');
Route::get('del/{id}','IndexController@del')->where(['id'=>'\d+']);/*软删除*/
Route::get('delindex','IndexController@delindex');/*被软删除目录*/
Route::get('suredel/{id}','IndexController@suredel')->where(['id'=>'\d+']);/*软删除里的硬删除*/
Route::get('index/demo','IndexController@demo');
Route::get('recover/{id}','IndexController@recover')->where(['id'=>'\d+']);/*恢复软删除*/

//Route::get('admin/index','Admin\IndexController@index');
//Route::get('admin/demo','Admin\IndexController@demo');
/*group的prefix是指public/后面的名称；namespace是指控制器名称*/
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('index','IndexController@index');
    Route::get('demo','IndexController@demo');
    
    
});

Route::get('add','Admin\MemberController@add');
Route::get('addmore','Admin\MemberController@addmore');
Route::get('update','Admin\MemberController@update');
Route::get('del','Admin\MemberController@del');
Route::get('select','Admin\MemberController@index');
Route::get('addsql','Admin\MemberController@addsql');
Route::get('addsql','Admin\MemberController@addsql');
Route::get('demo','Admin\MemberController@demo');
Route::get('demo2','Admin\MemberController@demo2');

Route::get('updateuser/{id}','IndexController@updateuser')->where(['id'=>'\d+']);
Route::get('loginview','IndexController@loginview');


Route::get('addview','IndexController@addview');
Route::get('regist','IndexController@regist');
Route::get('loginout','IndexController@loginout');

Route::post('update','IndexController@update');
Route::post('adduser','IndexController@adduser');
Route::post('login','IndexController@login');
Route::post('regist','IndexController@regist');
