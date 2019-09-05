<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "userinfo";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $guarded = [];
    /**
     * 获取等待审核的用户实名认证信息
     * @return [type] [description]
     */
    public static function getUserInfo()
    {
    	$res = self::join('user','userinfo.uid','=','user.uid')->where('type',1)->get();
    	return $res;
    }
}
