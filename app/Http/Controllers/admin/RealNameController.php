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
	 * @author dongxin
	 * @Date   2019-09-06
	 * @email  1261335491@qq.com
	 * @return [type]            [description]
	 */
    public function realNameRequest()
    {
    	$data = UserInfo::getUserInfo(); //获取等待审核的用户实名认证信息
    	// var_dump(empty($data));die;
    	return view('admin/realName/realNameRequest',['data'=>$data]);
    }
    /**
     * 实名认证处理
     * @author dongxin
     * @Date   2019-09-06
     * @email  1261335491@qq.com
     * @return [type]            [description]
     */
    public function realNameRequestDo()
    {
    	$id = request('id');
    	$type = request('type');
    	$res = UserInfo::setType($id,$type);
    	// dd($res);
    	if(!empty($res)){
    		echo "<script>alert('设置成功');location.href=history.go(-1)<script>";die;
    	}else{
    		echo "<script>alert('设置失败');location.href=history.go(-1)<script>";die;
    	}
    }
}
