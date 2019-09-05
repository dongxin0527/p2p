<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	/**
	 * 前台首页
	 * @author 杰克
	 * @DateTime 2019-09-05T14:17:36+0800
	 * @param    Request                  $request [description]
	 * @return   [type]                            [description]
	 */
    public function index(Request $request)
    {
    	return view('index/index/index');
    }
}
