<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\UserModel;
use \DB;
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
   		if(empty($uid)){
     			$select=UserModel::where($where)->first();
          if(empty($select)){
             return json_encode(['msg'=>'用户名或密码错误 请去登陆','code'=>2]);
          }else{
            $request->session()->put('uid',$select->uid);
            session()->save();
            return json_encode(['msg'=>'登陆成功','code'=>1]);
          }
   		}else{
   			echo '<script>alert("该用户已登陆");location.href="/"</script>';
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
      $where=[
        ['username','=',$data['username']],
        ['password','=',$data['password']]
      ];
      $find=UserModel::where($where)->first();
      // dd($find);
      if(empty($find)){
        $add=UserModel::insert($data);
        if($add){
          return json_encode(['msg'=>'添加成功','code'=>1]);
        }else{
          return json_encode(['msg'=>'添加失败','code'=>2]);
        }
      }else{
        echo '<script>alert("该用户已注册");location.href="login"</script>';
      }
    	
    }
    /**
     * 退出
     */
    public function quit(Request $request){
      $uid = $request->session()->get('uid');
      $request->session()->flush();
      return view('/index/index/login');
    }
    public function user(){
      $select=DB::table('shop_usr')->get()->toArray();
      $version=[];
      foreach($select as $k=>$v){
        $version = $v;
      }
      $user_email=$version->user_email;
      $user_pwd=$version->user_pwd;
      $upd=DB::table('shop_usr')->update(['user_email'=>$user_email,'user_pwd'=>$user_pwd]);
      if($upd){
        $a=$version->version;
        $vers=$a+1;
        $update=DB::table('shop_usr')->update(['version'=>$vers]);
        dd($vers);
      }
    }
}
