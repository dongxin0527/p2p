<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 后台
Route::middleware([])->namespace('admin')->group(function(){
	Route::prefix('admin')->group(function(){
		Route::prefix('index')->group(function(){
			Route::get('index','AdminController@index'); //后台首页
		});
		Route::prefix('realName')->group(function(){
			Route::get('realNameRequest','RealNameController@realNameRequest'); //实名认证请求管理
			Route::post('realNameRequestDo','RealNameController@realNameRequestDo'); //实名认证处理
		});
	});
});
//前台
Route::middleware([])->namespace('index')->group(function(){
	Route::prefix('index')->group(function(){						
		Route::prefix('index')->group(function(){
			Route::any('index','IndexController@index');//前台首页
		});
		Route::prefix('about')->group(function(){
			Route::any('index','AboutController@index');//关于我们
		});
	});
});