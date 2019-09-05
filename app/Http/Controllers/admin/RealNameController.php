<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\User;
use App\model\UserInfo;

class RealNameController extends Controller
{
	/**
	 * 审核用户实名认证页
	 * @return [type] [description]
	 */
    public function realNameRequest()
    {
    	$data = UserInfo::getUserInfo(); //获取等待审核的用户实名认证信息
    	return view('admin/realName/realNameRequest',['data'=>$data]);
    }
}
