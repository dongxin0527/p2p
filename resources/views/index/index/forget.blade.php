<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>修改密码</title>
<link rel="stylesheet" type="text/css" href="/index/css/style.css">
<script type="text/javascript" src="/index/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/index/js/all.js"></script>
</head>
<body>
<div class="zxcf_top_wper">
    <div class="zxcf_top px1000 clearfix">
         <div class="zxcf_top_l fl">
            <img src="/index/images/zxcf_phone.png" alt="">
            董老师15102633389(工作时间9:00-17:30)
            <a href="#"><img src="/index/images/zxcf_weixin.png" alt=""></a>
            <a href="#"><img src="/index/images/zxcf_sina.png" alt=""></a>
            <a href="#"><img src="/index/images/zxcf_qq.png" alt=""></a>
         </div>
         <div class="zxcf_top_r fr">
            <a href="login.html" class="curspan">立即登录</a>
            <span>|</span>
            <a href="register.html">免费注册</a>
            <span>|</span>
            <a href="problem.html">常见问题</a>
         </div>
    </div>
</div>
<div class="zxcf_nav_wper">
    <div class="zxcf_nav clearfix px1000">
         <div class="zxcf_nav_l fl"><img src="/index/images/zxcf_logo.png" alt=""></div>
         <div class="zxcf_nav_r fr">
                <img src="/index/images/lg_pic01.png" alt=""> 
            <span>
            <a href="#">返回首页</a></span>
            
         </div>
    </div>
</div>
<div class="login_con_wper">
      <div class="login_con px1000 ">
           <div class="lg_section clearfix">
                 <div class="lg_section_l fl">
                    <img src="/index/images/lg_bg02.png"> 
                 </div>
                 <!-- end l -->
                 <div class="lg_section_r fl">
                       <h2 class="lg_sec_tit clearfix">
                          <span class="fl">设置密码</span>
                          <em class="fr">找回密码<a href="login">登录</a></em>
                       </h2>
                       <form>
                            <fieldset>
                            	<p class="mt20">
                                     <input type="text" name="username" placeholder="输入用户名" class="lg_input01 lg_input">
                                  </p>
                                  <p class="mt20">
                                     <input type="password" name="password" placeholder="密码" class="lg_input02 lg_input">
                                  </p>
                                  <p class="mt20">
                                     <input type="password" name="pay_password" placeholder="确认密码" class="lg_input03 lg_input">
                                  </p>
                                 <p class="clearfix lg_check"><span class="fl"><a href="forget" class="fr">忘记密码？找回</a></p>
                                 <p><a href="#" class="lg_btn">修改密码</a></p>
                            </fieldset>
                       </form>
                 </div>
           </div>
      </div>
</div>
<div class="zscf_aboutus_wper">
      <div class="zscf_aboutus px1000 clearfix">
            <div class="zscf_aboutus_l fl">
                   <ul class="zscf_aboutus_lul clearfix">
                      <li class="pt10"><a href="#"><img src="/index/images/app.png" alt=""></a>
                      </li>
                      <li>
                      <p class="pb20">服务热线</p>
                      <strong>13681412840</strong>
                      </li>
                      <li>
                          <p class="pb10 linkpic">
                             <a href="#"><img src="/index/images/ft_sina.png" alt=""></a>
                             <a href="#"><img src="/index/images/ft_weixin.png" alt=""></a>
                             <a href="#"><img src="/index/images/ft_erji.png" alt=""></a>
                          </p>
                          <p><a href="#">madajie@xiaoma.com</a></p>
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
</body>
</html>
<script>
    $(document).on("click",".lg_btn",function(){
    	var username=$('.lg_input01').val();
        var password=$('.lg_input02').val();
        var pay_password=$('.lg_input03').val();
        if(!username){
            alert('请输入用户名');
        }
        if(password != pay_password){
            alert('请输入的密码保持一致才🆗啊 亲');return;
        }
        $.ajax({
            url:"forget_do",
            type:'post',
            dataType:'json',
            data:{username:username,password:password,pay_password:pay_password},
            success:function(res){
                if(res.code==1){
                    window.location.href="login";
                }
            }
        })
    })
</script>