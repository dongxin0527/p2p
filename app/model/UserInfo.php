<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'userinfo';
    protected $primaryKey = 'id';
    public    $timestamps = false;
    protected $guarded = [];

    /**
     * 实名唯一验证
     * @author 杰克
     * @DateTime 2019-09-06T11:49:02+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $name [用户姓名]
     * @return   [type]                         [数据库中是否有数据]
     */
    public static function nameUnique($name)
    {
    	$data = self::where("name",$name)->first();
    	return $data;
    }
    /**
     * 用户数据添加
     * @author 杰克
     * @DateTime 2019-09-06T11:56:08+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $data [要添加的大数组]
     * @return   [type]                         [添加执行的结果]
     */
    public static function userAdd($data)
    {
    	$res = self::insert($data);
    	return $res;
    }
    /**
     * 根据用户ID查询实名的状态
     * @author 杰克
     * @DateTime 2019-09-06T16:45:04+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $uid [用户ID]
     * @return   boolean                       [description]
     */
    public static function isLoan($uid)
    {
    	$data = self::where("uid",$uid)->first()->toArray();
   		return $data;
    }
}