<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>注册</title>
<link rel="stylesheet" type="text/css" href="/index/css/style.css">
<!-- <link rel="stylesheet/less" type="text/css" href="css/style.less" /> -->
<script type="text/javascript" src="/index/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/index/js/all.js"></script>
<!--[if IE 6]> 
<script src="./js/iepng.js" type="text/javascript"></script> 
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input,span, p');
</script>
<![endif]-->
</head>
<body>
<!-- header start -->
<div class="zxcf_top_wper">
    <div class="zxcf_top px1000 clearfix">
         <div class="zxcf_top_l fl">
            <img src="/index/images/zxcf_phone.png" alt="">
            400-027-0101(工作时间9:00-17:30)
            <a href="#"><img src="/index/images/zxcf_weixin.png" alt=""></a>
            <a href="#"><img src="/index/images/zxcf_sina.png" alt=""></a>
            <a href="#"><img src="/index/images/zxcf_qq.png" alt=""></a>
         </div>
         <div class="zxcf_top_r fr">
            <a href="login" class="curspan">立即登录</a>
            <span>|</span>
            <a href="register">免费注册</a>
            <span>|</span>
            <a href="problem.html">常见问题</a>
         </div>
    </div>
</div>
<!-- end top -->
<div class="zxcf_nav_wper">
    <div class="zxcf_nav clearfix px1000">
         <div class="zxcf_nav_l fl"><img src="/index/images/zxcf_logo.png" alt=""></div>
         <div class="zxcf_nav_r fr">
                <img src="/index/images/lg_pic01.png" alt=""> 
            <span>
            <a href="{{url('/')}}">返回首页</a></span>
            
         </div>
    </div>
</div>
<!-- end  -->
<div class="reg_con_wper">
    <div class="reg_con px1000">
           <div class="reg_box clearfix">
               <div class="reg_box_l fl">
                  <img src="
                  /index/images/reg_pic01.png" alt="">
               </div>
               <div class="reg_box_r fl">
                    <h2 class="lg_sec_tit clearfix">
                          <span class="fl">注册</span>
                          <em class="fr">没有帐号，<a href="login">立即登录</a></em>
                    </h2>
                    <form>
                            <fieldset>
                                  <p class="mt20">
                                     <input type="text" name="username" placeholder="用户名" class="lg_input01 lg_input">
                                  </p>
                                  <p class="mt20">
                                     <input type="password" name="password" placeholder="密码" class="lg_input02 lg_input">
                                  </p>
                                  <p class="mt20">
                                     <input type="password" name="pay_password" placeholder="密码确认" class="lg_input03 lg_input">
                                  </p>
                                  <p class="mt20 yanzheng">
                                     <input type="text" placeholder="验证码" name="captcha" class="lg_input04 lg_input">
                                     <span href="#"><img src="{!! captcha_src() !!}" onclick="this.src='{{ captcha_src() }}?r='+Math.random();" /></span>
                                  </p>
                                  <p class="pt10"><a href="#">使用条款</a>&nbsp;&nbsp;<a href="#">隐私条款</a></p>
                                 <p class="mt20"><a href="#" class="lg_btn">立即注册</a></p>
                            </fieldset>
                       </form>
               </div>
           </div>
    </div>
</div>
<!-- footer start -->
<div class="zscf_aboutus_wper">
      <div class="zscf_aboutus px1000 clearfix">
            <div class="zscf_aboutus_l fl">
                   <ul class="zscf_aboutus_lul clearfix">
                      <li class="pt10"><a href="#"><img src="/index/images/app.png" alt=""></a>
                      </li>
                      <li>
                      <p class="pb20">服务热线</p>
                      <strong>400-027-0101</strong>
                      </li>
                      <li>
                          <p class="pb10 linkpic">
                             <a href="#"><img src="/index/images/ft_sina.png" alt=""></a>
                             <a href="#"><img src="/index/images/ft_weixin.png" alt=""></a>
                             <a href="#"><img src="/index/images/ft_erji.png" alt=""></a>
                          </p>
                          <p><a href="#">kefu@zhongxincaifu.com</a></p>
                      </li>
                   </ul>
            </div>
            <!-- end left -->
            <div class="zscf_aboutus_r fl clearfix">
                 <a href="#" class="fl ft_ewm"><img src="/index/images/ft_erweima.png" alt=""></a>
                 <ul class="fl clearfix">
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">我要融资</a></li>
                    <li><a href="problem.html">帮助中心</a></li>
                    <li><a href="#">友情链接</a></li>
                    <li><a href="#">招贤纳士</a></li>
                    <li><a href="#">收益计算器</a></li>
                 </ul>
            </div>
            <!-- end right -->

      </div>
</div>

<div class="zscf_bottom_wper">
    <div class="zscf_bottom px1000 clearfix">
          <p class="fl">© 2014 zhongxincaifu &nbsp;  &nbsp;&nbsp;   中兴财富金融信息服务股份有限公司 &nbsp;&nbsp;&nbsp;    来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
          <p class="fr">
            <a href="#"><img src="/index/images/360.png" alt=""></a>
            <a href="#"><img src="/index/images/kexin.png" alt=""></a>
            <a href="#"><img src="/index/images/norton.png" alt=""></a>
          </p>
    </div>
</div>
<!-- footer end -->
</body>
</html>
<script>
    $(document).on("click",".lg_btn",function(){
        var username=$('.lg_input01').val();
        var password=$('.lg_input02').val();
        var pay_password=$('.lg_input03').val();
        var captcha=$('.lg_input04').val();
        if(!username){
            alert('请填写名称');return;
        }
        if(!password){
            alert('请填写密码');return;
        } 
        if(password != pay_password){
            alert('密码应保持一致');return;
        }
        if(!captcha){
            alert('请填写验证码');return;
        }
       
        $.ajax({
            url:'register_do',
            type:'post',
            data:{username:username,password:password,pay_password:pay_password},
            dataType:'json',
            success:function(res){
                if(res.code==1){
                     window.location.href = 'login';
                }
            }
        })
    })
</script>