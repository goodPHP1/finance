<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>首页</title>
	<base href="{{ URL::asset('/home/images/') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/home/css/style.css') }}">
<!-- <link rel="stylesheet/less" type="text/css" href="css/style.less" /> -->
<script type="text/javascript" src="{{ URL::asset('/home/js/jquery-1.7.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/home/js/all.js') }}"></script>
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
		    <img src="{{ URL::asset('/home/images/zxcf_phone.png') }}" alt="">
		    400-027-0101(工作时间9:00-17:30)
		    <a href="#"><img src="{{ URL::asset('/home/images/zxcf_weixin.png') }}" alt=""></a>
		    <a href="#"><img src="{{ URL::asset('/home/images/zxcf_sina.png') }}" alt=""></a>
		    <a href="#"><img src="{{ URL::asset('/home/images/zxcf_qq.png') }}" alt=""></a>
		 </div>
		 <div class="zxcf_top_r fr">
		 	<a href="javascript:;" class="curspan">立即登录</a>
		 	<span>|</span>
		 	<a href="/login/register">免费注册</a>
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
		 		<img src="{{ URL::asset('/home/images/lg_pic01.png') }}" alt=""> 
		 	<span>
		    <a href="#">返回首页</a></span>
		 	
		 </div>
	</div>
</div>
<!-- end  -->
<div class="login_con_wper">
	  <div class="login_con px1000 ">
	  	   <div class="lg_section clearfix">
	  	   	     <div class="lg_section_l fl">
	  	   	     	<img src="images/lg_bg02.png"> 
	  	   	     </div>
	  	   	     <!-- end l -->
	  	   	     <div class="lg_section_r fl">
	  	   	     	   <h2 class="lg_sec_tit clearfix">
	  	   	     	      <span class="fl">登录</span>
	  	   	     	      <em class="fr">没有帐号，<a href="#">立即注册</a></em>
	  	   	     	   </h2>
	  	   	     	   <form>
	  	   	     	   	    <fieldset>
	  	   	     	   	    	  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="用户名/手机" name="username" class="lg_input01 lg_input">
	  	   	     	   	    	  	<span class='error_name'></span>
	  	   	     	   	    	  </p>
                                  <p class="mt20">
	  	   	     	   	    	  	 <input type="text" placeholder="密码" name="pwd" class="lg_input02 lg_input">
	  	   	     	   	    	  </p>
                                 <p class="clearfix lg_check"><span class="fl"><input type="checkbox">记住用户名</span><a href="#" class="fr">忘记密码？找回</a></p>
                                 <p><a href="javascript:;" class="lg_btn">立即登陆</a></p>
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
	$("input[name='username']").blur(function(){
		var name = $(this).val();
		if(name==""){
			$(".error_name").html("<span style='color:red;font-size:12px;'>*用户名为空</span>");
			return false;
		}
		$.ajax({
			type:'get',
			data:'name='+name,
			url:"/login/login_do",
			success:function(msg){
				if(msg!=1){
					$(".error_name").html("<span style='color:red;font-size:12px;'>*用户名不存在</span>");
					return false;
				}
				if(msg==1){
					$(".error_name").html("<span style='color:green;font-size:18px;'>√</span>");
					return true;
				}
			}
		});
	})
	$(".lg_btn").click(function(){
		var name = $("input[name='username']").val();
		var pwd = $("input[name='pwd']").val();
		if(name=="" || pwd==""){
			$(this).attr("disable",true);
		}
		$.ajax({
			type:'get',
			data:'name='+name+"&pwd="+pwd,
			url:"/login/login_do",
			success:function(msg){
				if(msg==1){
					window.location.href="/index/index?name="+name+"";
				}
			}
		});
	})
</script>
</html>