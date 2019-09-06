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
// 后台
Route::middleware([])->namespace('admin')->group(function(){
	Route::prefix('admin')->group(function(){
		Route::prefix('index')->group(function(){
			Route::get('index','AdminController@index'); //后台首页
		
		});
	});
});
//前台
Route::middleware(['CheckIndexLogin'])->namespace('index')->group(function(){
	Route::prefix('index')->group(function(){						
		Route::prefix('index')->group(function(){
			Route::any('index','IndexController@index');//前台首页
		});

	});
});
//前台登录注册 laoma
Route::middleware([])->namespace('index')->group(function(){
	Route::prefix('index')->group(function(){						
		Route::prefix('index')->group(function(){
			
			Route::get('login','LoginController@login');//前台登录
			Route::post('login_do','LoginController@login_do');//前台登陆执行
			Route::any('forget','LoginController@forget');//忘记密码 找回
			Route::post('forget_do','LoginController@forget_do');//忘记密码的执行页面
			Route::any('register','LoginController@register');//前台注册
			Route::any('register_do','LoginController@register_do');//前台注册执行页面
		});

	});
});
