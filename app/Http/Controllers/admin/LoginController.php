<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 后台注册  xiaoma 
     */
    public function login(){
    	return view('admin/index/login');
    }
}
