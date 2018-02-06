<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>公告列表</title>
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
@include('common.head')
<!-- end top -->
<div class="zxcf_menu_wper">
	<div class="zxcf_menu px1000">
		  <a href="/index/index">首页</a>
		  <a href="/index/invest">我要投资</a>
		  <a href="/index/borrow">我要借款</a>
		  <a href="#">实时财务</a>
		  <a href="javascript:;" class="zm_cura">新手指引</a>
		  <a href="#" style="margin-right:0;">关于我们</a>
	</div>
</div>
<!-- end  -->
<div class="notic_con_wper">
	  <div class="notic_con px1000">
	  	     <div class="notic_ban">
	  	     	 <img src="images/notic_ban01.png" alt="">
	  	     </div>
	  	     <div class="notic_section clearfix">
	  	     	  <div class="notic_sec_l fl">
	  	     	  	  <h3><img src="images/notic_pic01.png" alt=""></h3>
	  	     	  	  <ul class="notic_secl_ul">
	  	     	  	  	   <li class="notic_curli">注册与登录 </li>
	  	     	  	  	   <li>账户与安全 </li>
	  	     	  	  	   <li>充值与提现 </li>
	  	     	  	  	   <li>投资与还款 </li>
	  	     	  	  	   <li>充值与提现 </li>

	  	     	  	  </ul>
	  	     	  </div>
	  	     	  <!-- end l -->
	  	     	  <div class="notic_sec_r fl">
	  	     	  	    <h2 class="notic_secr_tit">网站公告</h2>
	  	     	  	    <ul class="notic_secr_ul">
	  	     	  	    	<li class="clearfix"><a href="article.html">注册送红包</a><span>2015-07-23 09:21:12</span></li>
	  	     	  	    	<li class="clearfix"><a href="article.html">注册送红包</a><span>2015-07-23 09:21:12</span></li>
	  	     	  	    	
	  	     	  	    </ul>
	  	     	  	    <p class="notic_pagelink">
	  	     	  	    	 <a href="#" class="notic_acur">1</a>
	  	     	  	    	 <a href="#">2</a>
	  	     	  	    	 <a href="#">3</a>
	  	     	  	    	 <a href="#">4</a>
	  	     	  	    	 <a href="#">下一页</a>
	  	     	  	    	 <a href="#">尾页</a>
	  	     	  	    </p>
	  	     	  </div>
	  	     </div>
	  </div>
</div>
<script type="text/javascript">
	
</script>
</body>
</html>
<script language="JavaScript">
	// 找对象
	function fun_my(){
		self.location='/my/index'; 
	}

</script>