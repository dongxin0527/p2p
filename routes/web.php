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
		Route::prefix('realName')->group(function(){
			Route::get('realNameRequest','RealNameController@realNameRequest'); //实名认证请求管理
			Route::post('realNameRequestDo','RealNameController@realNameRequestDo'); //实名认证处理
		});
	});
});
//前台
Route::any('/','index\IndexController@index');//前台首页
Route::middleware(['CheckIndexLogin'])->namespace('index')->group(function(){
	Route::prefix('index')->group(function(){						
		Route::prefix('loan')->group(function(){
			Route::any('loanForm','LoanController@loanForm');//我要借款
			Route::any('loanadd_do','LoanController@loanadd_do');//我要借款的表单处理
			Route::any('loanWait','LoanController@waiting');//等待审核
			Route::any('loanWait_do','LoanController@wait_do');//轮训查询审核结果
			Route::any('gaveMoneyForm','LoanController@gaveMoneyForm');//贷款表单
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
		Route::prefix('about')->group(function(){
			Route::any('index','AboutController@index');//关于我们
		});

	});
});
