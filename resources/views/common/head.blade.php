<?php  
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
// $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
// var_dump($name);
?>
<div class="zxcf_top_wper">
	<div class="zxcf_top px1000 clearfix">
		 <div class="zxcf_top_l fl">
		    <img src="{{URL::asset('/home/images/zxcf_phone.png')}}" alt="">
		    400-027-0101(工作时间9:00-17:30)
		    <a href="#"><img src="{{ URL::asset('/home/images/zxcf_weixin.png') }}" alt=""></a>
		    <a href="#"><img src="{{ URL::asset('/home/images/zxcf_sina.png') }}" alt=""></a>
		    <a href="/login/login_qq"><img src="{{ URL::asset('/home/images/zxcf_qq.png') }}" alt=""></a>
		 </div>
		 <div class="zxcf_top_r fr">
		 	<?php if ($name): ?>
		 		<a href="/my/index" class="curspan"><?=$name;?></a>	 		
		 	<?php endif ?>
		 	<?php if ($name==''): ?>
		 		<a href="/login/index" class="curspan">立即登录</a>
		 	<?php endif ?>
		 	<span>|</span>
		 	<a href="/login/register">免费注册</a>
		 	<span>|</span>
		 	<a href="/index/problem">常见问题</a>
		 	
		 	<?php if ($name): ?>
		 		<span>|</span>
		 		<a href="/login/logout">退出</a>	 		
		 	<?php endif ?>
		 </div>
	</div>
</div>
<div class="zxcf_nav_wper">
	<div class="zxcf_nav clearfix px1000">
		 <div class="zxcf_nav_l fl"><img src="{{ URL::asset('/home/images/zxcf_logo.pn') }}g" alt=""></div>
		 <div class="zxcf_nav_r fr">
		 	<img src="{{ URL::asset('/home/images/zxcf_perinfo.png') }}" alt="">
		 	<span><a href="/my/index" onclick="fun_my()">我的账户</a>
		 	<img src="{{ URL::asset('/home/images/zxcf_icon01.png') }}" alt=""></span>
		 	<ul class="zxcf_perinfo" style="display:none;">
		 		<li><a href="#">111</a></li>
		 		<li><a href="#">111</a></li>
		 		<li><a href="#">111</a></li>
		 	</ul>
		 </div>
	</div>
</div>