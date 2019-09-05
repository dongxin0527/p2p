@extends("layouts.index")
@section("content")

<!--main-->
<div class="wrap mt10">

  <div class="clearfix">
  	<form action="{{url('/index/loan/loanadd_do')}}" method="post">
    <!--img-->
    <div class="img loans-img bdr fl">
        <table class="productForm">
	        <tr>
	          <th>籍贯城市</th>
	          <td>
	            <div class="">
	                <select class="province" name="province">
	                	<option>请选择</option>
	                	@foreach($area as $v)
	                	<option value="{{$v['id']}}">{{$v['name']}}</option>
	                	@endforeach
	                </select>省
	                <select class="city" name="city">
	                	<option>请选择</option>
	                </select>市
	                <select class="area" name="area">
	                	<option>请选择</option>
	                </select>区

	            </div>
	            <div class="tishi"><span id="cityError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	        <tr>
	          <th>具体地址</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="detail" class="input_all input_1" maxlength="15"/>
	         
	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	        <tr>
	          <th>真实姓名</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="name" class="input_all input_1" maxlength="15"/>
	   
	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	        <tr>
	          <th>移动电话</th>
	          <td>
	            <label class="touzi01">
	              <input type="text" id="mobile" name="phone" class="input_all input_1" maxlength="11"/>
	
	            </label>
	            <div class="tishi"><span id="mobileError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	        <tr>
	          <th>称谓</th>
	          <td class="hight">
	            <label><input name="sex" type="radio" value="1" checked>先生</label>
	            <label><input name="sex" type="radio" value ="2">女士</label>
	          </td>
	        </tr>
	        <tr>
	          <th>婚姻状态</th>
	          <td class="hight">
	            <label><input name="merriage" type="radio" value="1" checked>已婚</label>
	            <label><input name="merriage" type="radio" value ="2">未婚</label>
	          </td>
	        </tr>
	        <tr>
	          <th>出生日期</th>
	          <td>
	            <label class="touzi01">
	              <input type="date" id="birthday" name="born" class="input_all input_1" maxlength="15"/ >
	             
	            </label>
	            <div class="tishi"><span id="birthdayError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
			<tr>
	          <th>身份证</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="idcard" class="input_all input_1" maxlength="15"/>
	
	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	        <tr>
	          <th>学历</th>
	          <td>
	            <select id="js_dueId" name="education" class="select1">
	              <option value="">请选择</option>	
	              <option value="1">初中</option>
	              <option value="2">高中</option>
	              <option value="3">大学</option>
	              <option value="4">研究生</option>
	              <option value="5">硕士</option>
	              <option value="6">博士</option>
	              <option value="7">博士后</option>
	            </select>
	            <div class="tishi"></div>
	          </td>
	        </tr>
	        <tr>
	          <th>月收入</th>
	          <td>
	            <select id="js_dueId" name="month_income" class="select1">
	              <option value="">请选择</option>	
	              <option value="1">一千以下</option>
	              <option value="2">一千到五千</option>
	              <option value="3">五千到一万</option>
	              <option value="4">一万到三万</option>
	              <option value="5">三万到六万</option>
	              <option value="6">六万以上</option>
	            </select>
	            <div class="tishi"></div>
	          </td>
	        </tr>
 		</table>
    </div>
    <div class="formbox bdr fr">
    	
	      <table class="productForm">
	        
	        <tr>
	          <th>住房条件</th>
	          <td>
	            <select id="js_dueId" name="housing" class="select1">
	              <option value="">请选择</option>	
	              <option value="1">无房</option>
	              <option value="2">一套房</option>
	              <option value="3">一套以上</option>
	              <option value="4">与父母同住</option>
	            </select>
	            <div class="tishi"></div>
	          </td>
	        </tr>
	        <tr>
	          <th>购车情况</th>
	          <td>
	            <select id="js_dueId" name="buy_cars" class="select1">
	              <option value="">请选择</option>	
	              <option value="1">十万以下</option>
	              <option value="2">十万到三十万</option>
	              <option value="3">三十万以上</option>
	            </select>
	            <div class="tishi"></div>
	          </td>
	        </tr>
	  		<tr>
	          <th>公司类型</th>
	          <td>
	            <select id="js_dueId" name="company" class="select1">
	              <option value="">请选择</option>	
	              <option value="1">国企</option>
	              <option value="2">私企/民营</option>
	              <option value="3">外企</option>
	              <option value="4">个体</option>
	              <option value="5">无业</option>
	            </select>
	            <div class="tishi"></div>
	          </td>
	        </tr>
			<tr>
	          <th>开户银行</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="bank" class="input_all input_1" maxlength="15"/>

	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
			<tr>
	          <th>开户支行名称</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="bank_name" class="input_all input_1" maxlength="15"/>

	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>
	 		<tr>
	          <th>银行卡号</th>
	          <td>
	          	<label class="touzi01">
	              <input type="text" id="realName" name="bank_account" class="input_all input_1" maxlength="15"/>
	
	            </label>
	            <div class="tishi"><span id="realNameError" class="prompt_2 hidden"></span></div>
	          </td>
	        </tr>

	        <tr>
	          <th></th>
	          <td><input type="submit" id="save" value="立即申请" class="btn btnSize_6 btn_orange" /></td>
	        </tr>
	      </table>      	
	    </form>
    </div>
  </div>
  
  <div class="detailsBox mt20 clearfix">
    <div class="item first">
       <div class="title">申请资格</div>
       <ul class=" mt10 cicle">
         <li>年龄23周岁-60周岁的中国大陆公民（港、澳、台除外）</li>
         <li>企业或商户经营时间满1年及以上</li>
         <li>企业或商户月均流水须3万以上</li>
       </ul>
    </div>
    <div class="item">
       <div class="title">额度期限</div>
       <ul class=" mt10 cicle">
         <li>借款额度：3万-30万元</li>
         <li>借款期限：12、18、24个月</li>
         <li>还款方式：等额本息，每月还款</li>
       </ul>
    </div>
    <div class="item bd0">
       <div class="title">所需材料</div>
       <ul class=" mt10 cicle">
         <li>申请人二代身份证</li>
         <li>企业/商户经营场所证明材料</li>
         <li>近6个月对公或对私银行流水或POS交易流水</li>
       </ul>
    </div>
  </div>
</div>
<script src="/jquery-3.3.1.js"></script>
<script>
//三级联动
    $(document).on('change','.province',function(){
        var pid = $(this).val();
        $.post(
            "{{url('/index/loan/loanForm')}}",
            {pid:pid},
            function(res){

                var add = "<option value='' selected='selected'>请选择...</option>";
                for(var i = 0 ;i<res.length;i++){
                    add += "<option value='"+res[i]['id']+"'>"+res[i]['name']+"</option>";
                }
                $('.city').html(add);
                $('.area').html("<option value='' selected='selected'>请选择...</option>");
            }
        )
    })

    $(document).on('change','.city',function(){
        var pid = $(this).val();
        $.post(
            "{{url('/index/loan/loanForm')}}",
            {pid:pid},
            function(res){

                var add = "<option value='' selected='selected'>请选择...</option>";
                for(var i = 0 ;i<res.length;i++){
                    add += "<option value='"+res[i]['id']+"'>"+res[i]['name']+"</option>";
                }
                $('.area').html(add);
            }
        )
    })	
</script>

@endsection