<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
	/**
	 * 获取用户ID
	 * @author 杰克
	 * @DateTime 2019-09-06T10:25:06+0800
	 * @email    haiwanlvzhu@163.com
	 * @return   [type]                   [description]
	 */
	public static function getUserId()
	{
		$uid = session('uid');	
		return $uid;
	}
	/**
	 * 全局跳转
	 * @author 杰克
	 * @DateTime 2019-09-06T12:00:21+0800
	 * @email    haiwanlvzhu@163.com
	 * @param    [type]                   $url [跳转地址]
	 * @param    [type]                   $msg [提示信息]
	 * @return   [type]                        [description]
	 */
	public static function url($url,$msg)
	{
		echo "<script>alert('".$msg."');location.href = '".env('APP_URL').$url."'</script>";die;
	}
}

