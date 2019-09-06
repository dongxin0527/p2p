<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
	/**
	 * 关注我们首页
	 * @return [type] [description]
	 */
    public function index()
    {
    	return view('index/about/index');
    }
}
