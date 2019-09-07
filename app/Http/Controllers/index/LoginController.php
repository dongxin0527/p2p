<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\UserModel;
class LoginController extends Controller
{
	/**
	 * 前台登陆
	 * [login description]
	 * @author laoma
	 * @DateTime 2019-09-06T10:25:18+0800
	 * @email    2219988501@qq.com
	 * @return   [type]                   [description]
	 */
    public function login(){
    	return view('index/index/login');
    }
    /*
    	前台登录执行
    */
   public function login_do(Request $request){
   		$data=request()->all();
   		$data['password']=sha1($data['password']);
   		$where=[
   			['username','=',$data['username']],
   			['password','=',$data['password']]
   		];
   		$uid = $request->session()->get('uid');
   		// dd($uid);
   		// request()->session()->flush();die();
   		if(empty($uid)){
   			$select=UserModel::where($where)->first();
   			session('uid',$select['uid']);
   			session()->save();
   			return json_encode(['msg'=>'登陆成功','code'=>1]);
   		}else{
   			echo '<script>alert("用户名已存在!前去注册呗");location.href="register";</script>;';
   		}
   }
   /*
   		忘记密码  找回
    */
   public function forget(){
   	 return view('index/index/forget');
   }
   public function forget_do(Request $request){
   	$data=request()->all();
   	$data['password']=sha1($data['password']);
   	$data['pay_password'] = sha1($data['pay_password']);
   	$where=[
   		['username','=',$data['username']]
   	];
   	$update=UserModel::where($where)->update(['password'=>$data['password'],'pay_password'=>$data['pay_password'],'time'=>time()]);
   	if($update){
   		return json_encode(['msg'=>'修改密码成功','code'=>'1']);
   	}else{
   		return json_encode(['msg'=>'修改密码失败','code'=>'0']);
   	}
   }
    /*
    	前台注册
     */
    public function register(){
    	return view('index/index/register');
    }

    /*
    	前台注册执行页面
     */
    public function register_do(Request $request){
    	$data=request()->all();
    	$data['time']=time();
    	$data['password']=sha1($data['password']);
    	$data['pay_password'] = sha1($data['pay_password']);
    	$add=UserModel::insert($data);
    	if($add){
    		return json_encode(['msg'=>'添加成功','code'=>1]);
    	}else{
    		return json_encode(['msg'=>'添加失败','code'=>2]);
    	}
    }
}
