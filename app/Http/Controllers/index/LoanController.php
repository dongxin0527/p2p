<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Common;
use App\model\UserInfo;
use App\model\Area;

class LoanController extends Controller
{
	/**
	 * 我要借款,表单视图
	 * @author 杰克
	 * @DateTime 2019-09-05T15:17:43+0800
	 */
    public function LoanForm(Request $request)
    {
    	if (request()->ajax()) {
    		$pid = $request->input('pid');
    		$data = Area::where('pid',$pid)->get()->toArray();
    		return $data;
    	}else{
    		$array = Area::get()->toArray();
    		$arr = [];
			foreach ($array as $k => $v) {
				$arr[$v['id']] = $v['name'];
			}
	    	$data = Area::where('pid',0)->get()->toArray();
	    	return view("index/loan/loanForm",['area'=>$data,'arr'=>$array]);
    	}
    }
    /**
     * 借款处理
     * @author 杰克
     * @DateTime 2019-09-05T18:53:18+0800
     * @param    Request  $request [description]
     * @return   [type]            [description]
     */
    public function loanadd_do(Request $request)
    {
    	//获取用户ID
    	//$uid = Common::getUserId();
    	$uid = 1;//暂时写死1
    	//用户信息入库
    	$data = $request->all();
    	$this->isEmpty($data);
    	$this->isUnique($data);
    	//处理添加数据
    	$area = [$data['province'],$data['city'],$data['area']];
    	$areaArray = Area::whereIn('id',$area)->get()->toArray();
    	$native_place = '';
    	foreach ($areaArray as $k => $v) {
    		$native_place .= $v['name'];
    	}
    	//获取用户等级(资产评估)
    	$lev = $this->propertyPredict($data);
    	//组建添加的大数组
    	$data['uid'] = $uid;
    	$data['native_place'] = $native_place.$data['detail'];
    	$data['lev'] = $lev;
    	unset($data['province']);
    	unset($data['city']);
    	unset($data['area']);
    	unset($data['detail']);
    	//添加执行
    	$res = UserInfo::userAdd($data);
    	if ($res) {
    		Common::url("/index/loan/loanWait","信息已提交请等待");
    	}
    }
    /**
     * 资产预估
     * @author 杰克
     * @DateTime 2019-09-06T10:30:40+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $data [个人的资产信息]
     * @return   [type]                         [个人的资产等级,一共有5个等级]
     */
    public function propertyPredict($data)
    {
    	//初始分数100,学历是30%,月收入是20%,房产是30%,车产是10%,工作性质是10%
    	//========================评估算法start===============================
    	$education = $data['education']*0.3;//学历,一共是7个小等级
    	$month_income = $data['month_income']*0.2;//月收入,等级有6级
    	$housing = $data['housing']*0.3;//房产,等级有4级
    	$buy_cars = $data['buy_cars']*0.1;//车产,等级有3级
    	$company = $data['company']*0.1;//工作性质,等级有4级
    	$grade = $education+$month_income+$housing+$buy_cars+$company;
    	//等级的范围是 1~5.2

    	//========================评估算法end=================================
    	return $grade;
    }
    /**
     * 实名认证完成之后的等待页面
     * @author 杰克
     * @DateTime 2019-09-06T15:59:54+0800
     * @email    haiwanlvzhu@163.com
     * @return   [type]                   [description]
     */
    public function waiting()
    {
    	return view('index/loan/waiting');
    }
    public function wait_do(Request $request)
    {
    	$uid = 1;//先写死
    	$data = UserInfo::isLoan($uid);
    	return json_encode(['code'=>1,'data'=>$data['type']]);
    }
    /**
     * 非空验证
     * @author 杰克
     * @DateTime 2019-09-06T15:28:09+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $data [表单上传数据]
     * @return   boolean                        [description]
     */
    public function isEmpty($data)
    {
    	if ($data['province'] == "请选择" || $data['city'] == "请选择" || $data['area'] == "请选择") {
    		Common::url("/index/loan/loanForm","该表单每一项都是必填项,请核查!");die;
    	}
    	if (empty($data['detail'])||empty($data['name']) ||empty($data['phone']) ||empty($data['sex']) ||empty($data['merriage']) ||empty($data['born'])|| empty($data['idcard'])||empty($data['education']) ||empty($data['month_income']) || empty($data['housing'])||empty($data['buy_cars']) || empty($data['company']) ||empty($data['bank'])|| empty($data['bank_name']) ||empty($data['bank_account'])) {
    		Common::url("/index/loan/loanForm","该表单每一项都是必填项,请核查!");die;
    	}
    }
    /**
     * 唯一验证
     * @author 杰克
     * @DateTime 2019-09-06T15:30:28+0800
     * @email    haiwanlvzhu@163.com
     * @param    [type]                   $data [表单提交的数据]
     * @return   boolean                        [description]
     */
    public function isUnique($uid)
    {
    	$res = UserInfo::nameUnique($uid);
    	if ($res) {
    		Common::url("/index/loan/loanWait","您已经实名认证过");die;
    	}
    }
    /**
     * 贷款页面
     * @author 杰克
     * @DateTime 2019-09-06T17:03:56+0800
     * @email    haiwanlvzhu@163.com
     * @return   [type]                   [description]
     */
    public function gaveMoneyForm()
    {
    	echo "贷款页面";
    }
}
