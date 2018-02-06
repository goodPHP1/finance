<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>注册</title>
	<base href="{{ URL::asset('/home/js/') }}">
	<base href="{{ URL::asset('/home/css/') }}">
	<base href="{{ URL::asset('/home/images/') }}">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet/less" type="text/css" href="css/style.less" /> -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/all.js"></script>
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
		    <img src="images/zxcf_phone.png" alt="">
		    400-027-0101(工作时间9:00-17:30)
		    <a href="#"><img src="images/zxcf_weixin.png" alt=""></a>
		    <a href="#"><img src="images/zxcf_sina.png" alt=""></a>
		    <a href="#"><img src="images/zxcf_qq.png" alt=""></a>
		 </div>
		 <div class="zxcf_top_r fr">
		 	<a href="/login/index">立即登录</a>
		 	<span>|</span>
		 	<a href="javascript:;" class="curspan">免费注册</a>
		 	<span>|</span>
		 	<a href="/index/problem">常见问题</a>
		 </div>
	</div>
</div>
<!-- end top -->
<div class="zxcf_nav_wper">
	<div class="zxcf_nav clearfix px1000">
		 <div class="zxcf_nav_l fl"><img src="images/zxcf_logo.png" alt=""></div>
		 <div class="zxcf_nav_r fr">
		 		<img src="images/lg_pic01.png" alt=""> 
		 	<span>
		    <a href="#">返回首页</a></span>
		 	
		 </div>
	</div>
</div>
<!-- end  -->
<div class="reg_con_wper">
	<div class="reg_con px1000">
		   <div class="reg_box clearfix">
		   	   <div class="reg_box_l fl">
		   	   	  <img src="
		   	   	  images/reg_pic01.png" alt="">
		   	   </div>
		   	   <div class="reg_box_r fl">
		   	   	    <h2 class="lg_sec_tit clearfix">
	  	   	     	      <span class="fl">注册</span>
	  	   	     	      <em class="fr">没有帐号，<a href="#">立即登录</a></em>
	  	   	     	</h2>
	  	   	     	<form>
	  	   	     	   	    <fieldset>
	  	   	     	   	    	  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="用户名/手机" name="username" class="lg_input01 lg_input">
	  	   	     	   	    	  </p>
                                  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="密码" name="pwd" class="lg_input02 lg_input">
	  	   	     	   	    	  </p>
                                  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="密码确认" name="repwd" class="lg_input02 lg_input">
	  	   	     	   	    	  </p>
                                  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="手机号" name="tel" class="lg_input03 lg_input">
	  	   	     	   	    	  </p>
                                  <p class="mt20 yanzheng">
	  	   	     	   	    	  	 <input type="text" placeholder="验证码" name="code" class="lg_input04 lg_input">
	  	   	     	   	    	  	 <span href="javascript:;" class="code">发送验证码</span>
	  	   	     	   	    	  </p>
                                   <!-- <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="邀请码" class="lg_input03 lg_input">
	  	   	     	   	    	  </p> -->
                                  <p class="pt10"><a href="#">使用条款</a>&nbsp;&nbsp;<a href="#">隐私条款</a></p>
                                 <p class="mt20"><a href="javascript:;" class="lg_btn">立即登陆</a></p>
	  	   	     	   	    </fieldset>
	  	   	     	   </form>
		   	   </div>
		   </div>
	</div>
</div>
<!-- footer start -->
@include('common.bottom')
<!-- footer end -->
</body>
<script>
kaiguan=0;
	$(".code").click(function(){
		var tel = $("input[name='tel']").val();
		if(tel==""){
			alert("请填写手机号");
			return false;
		}
		// $(this).html("已发送");
		$.ajax({
			type:'get',
			data:'tel='+tel,
			url:"/login/yan",
			success:function(msg){
				if(msg!=100){
					alert("发送失败");
					return false;
				}
			}
		});
		var obj=$(this);
		var time=10;
		if(kaiguan==1){
			
		}else{
			var t=setInterval(function(){
				time--;
				kaiguan=1;
				obj.html("还有"+time+"s");
				if(time==0){
					clearInterval(t);
					obj.html("重新获取验证码");
					kaiguan=0;
				}
			},1000);
		};
	})
</script>
</html>
