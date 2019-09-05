<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	/**
	 * 后台主页
	 * @return [type] [description]
	 * @author 董鑫 <[<email address>]>
	 */
    public function index()
    {
    	return view('admin/index/index');
    }
}
