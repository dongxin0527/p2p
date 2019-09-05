<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
     * @param    Request                  $request [description]
     * @return   [type]                            [description]
     */
    public function loanadd_do(Request $request)
    {
    	$data = $request->all();
    	dd($data);
    }
}
