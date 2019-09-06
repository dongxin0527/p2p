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
    	$res = self::join('user','userinfo.uid','=','user.uid')->where('type',1)->get()->toArray();
    	return $res;
    }
    /**
     * 设置用户实名认证
     * @author dongxin
     * @Date   2019-09-06
     * @email  1261335491@qq.com
     * @param  [type]            $id   [本表自增id]
     * @param  [type]            $type [表字段type(实名认证)]
     */
    public static function setType($id,$type)
    {
        $res = self::where('id',$id)->update(['type'=>$type]);
        return $res;
    }
}
