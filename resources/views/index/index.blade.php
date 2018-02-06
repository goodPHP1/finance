<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>首页</title>
	<base href="{{ URL::asset('/home/js/') }}">
	<base href="{{ URL::asset('/home/css/') }}">
	<base href="{{ URL::asset('/home/images/') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/home/css/style.css') }}">
<!-- <link rel="stylesheet/less" type="text/css" href="css/style.less" /> -->
<script type="text/javascript" src="{{URL::asset('/home/js/jquery-1.7.2.min.js')}}"></script>
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
@include('common.head')
<!-- end top -->
<div class="zxcf_menu_wper">
	<div class="zxcf_menu px1000">
		  <a href="/index/index" class="zm_cura">首页</a>
		  <a href="/index/invest">我要投资</a>
		  <a href="/index/borrow">我要借款</a>
		  <a href="#">实时财务</a>
		  <a href="/index/noticelist">新手指引</a>
		  <a href="#" style="margin-right:0;">关于我们</a>
	</div>
</div>
<!-- end  -->
<div class="zscf_banner_wper">
	<div class="zscf_banner px1000">
		  <div class="zscf_box">
		  	   <p>累计成交：<strong>12亿2332万元</strong></p>
		  	   <p>运营时间：<strong>123天</strong></p>
		  	   <p><strong>24</strong>小时成功转让率<strong>12.12%</strong></p>
		  	   <a href="/login/index" class="btn btn1">立即登录</a><br>
		  	   <a href="/login/register" class="btn btn2">立即注册</a>
		  </div>
	</div>
</div>
<!-- end banner -->
<div class="zscf_con_wper pb30">
	<div class="zscf_con px1000">
	      <div class="zscf_block1 mt30 ">
	      	  <h2 class="zscf_block1_tit clearfix"><span class="fl"><strong>发标预告</strong>换卡后放假啊客户看 将黑金卡号看见啊后防盗卡…… </span><a href="#" class="fr">查看更多>></a></h2>
	      	  <div class="clearfix clear">
		      	  <ul class="zscf_block1_text clearfix fl">
		      	  	   <li>
		      	  	   	   <span class="block1_libg01">已加入中兴财富</span>
		      	  	   	   <br>
		      	  	   	   <em><strong>123123</strong>人</em>
		      	  	   </li>
		      	  	   <li>
		      	  	   	   <span class="block1_libg02">已加入中兴财富</span>
		      	  	   	   <br>
		      	  	   	   <em><strong>123123</strong>人</em>
		      	  	   </li>
		      	  	   <li>
		      	  	   	   <span class="block1_libg03">已加入中兴财富</span>
		      	  	   	   <br>
		      	  	   	   <em><strong>123123</strong>人</em>
		      	  	   </li>
		      	  </ul>
		      	 <!-- end l -->
		      	  <div class="block1_r fl">
		      	  	  <h2 class="block1_r_tit clearfix"><span>网站公告</span><a href="noticelist.html">+</a></h2>
		      	  	  <ul>
		      	  	  	  <li><span>关于新手体验</span><em>06-19</em></li>
		      	  	  	  <li><span>关于新手体验</span><em>06-19</em></li>
		      	  	  	  <li><span>关于新手体验</span><em>06-19</em></li>
		      	  	  	  <li><span>关于新手体验</span><em>06-19</em></li>

		      	  	  </ul>
		      	  </div>
	      	  </div>
	      </div>

	      <!-- end block1 -->
	      <div class="zscf_block2 mt30 clearfix ">
	      	    <div class="zscf_block2_l fl">
					<?php foreach ($cs_data as $key => $val): ?>
						<div class="block2_biao2 clearfix">
	      	    	     <div class="clearfix">
		      	    	 <span class="fl"><?=$val->corporate_name;?></span>
		      	    	 <div class="block2_biao_r fr">
		      	    	  	   <div class="tjxm_jindu ">
	  	      	     	    	   	     	 
	  	      	     	    	   	     	  <div class="press_wper fl">
	  	      	     	    	   	     	  	    <div class="press" style="width:<?=$val->schedule;?>%;">
	  	      	     	    	   	     	  	    	  
	  	      	     	    	   	     	  	    </div>
	  	      	     	    	   	     	  </div>
	  	      	     	    	   	     	   <span class="fl"><?=$val->schedule;?>%</span>
	  	      	     	    	  </div>
		      	    	  </div>
		      	    	  </div>
		      	    	 <ul class="clearfix clear block2_biao_ul">
		      	    	 	 <li>起投资金：<em><?=$val->sta_money;?>元</em></li>
		      	    	 	 <li><img src="{{ URL::asset('/home/images/bao.png') }}" alt="">年华收益：<strong>6+6<i>%</i></strong>
		      	    	 	 </li>
		      	    	 	 <li>
		      	    	 	 	产品期限：<span><?=$val->term;?>天</span>
		      	    	 	 </li>
		      	    	 	  <li>
		      	    	 	 	借款金额：<span><?=$val->rais_money;?>元</span>
		      	    	 	 </li>
		      	    	 	 <li>
		      	    	 	 	 <a href="/index/detail" class="invest_btn">立即投资</a>
		      	    	 	 </li>
		      	    	 </ul>
	      	    		</div>
					<?php endforeach ?>
	      	    	
	      	    </div>
	      	    <!-- end left -->
	      	    <div class="zscf_block2_r fl">
	      	          <div class="block2_r_video">
	      	          	  <!-- <img src="images/video.png" alt=""> -->
	      	          	  <embed src="" type="" width="250px;" height="180px;">
	      	          </div>
	      	    	  <div class="block2_r_tip">1分钟让你了解中兴财富</div>
	      	    </div>
	      	    <!-- end right -->
	      </div>
         <!--  end block2 -->
         <div class="zscf_block3 mt30 ">
         	   <h2 class="block3_tit clearfix"><span class="block3_curspan">项目列表</span><em><img src="{{ URL::asset('/home/images/shu.png') }}" alt=""></em><span>债权转让</span><a href="#">更多></a></h2>
         	  <div class="block3_pro_box clear">
         	  	    <div class="block3_prolist">
						<?php foreach ($data as $key => $val): ?>
							<div class="block3_proone clearfix clear">
         	  	    	  	   <span class="fl proone_left"><img src="{{ URL::asset('/home/images/xin.png') }}" alt=""></span>
         	  	    	  	   <!--  -->
         	  	    	  	   <div class="fl proone_center">
         	  	    	  	   	    <div class="clearfix">
						      	    	 <span class="fl proone_center_span1"><?=$val->corporate_name;?></span>
						      	    	 <div class="block2_biao_r fr">
						      	    	  	   <div class="tjxm_jindu ">
					  	      	     	    	   	     	 
					  	      	     	    	   	     	  <div class="press_wper fl">
					  	      	     	    	   	     	  	    <div class="press" style="width:<?=$val->schedule;?>%;">
					  	      	     	    	   	     	  	    	  
					  	      	     	    	   	     	  	    </div>
					  	      	     	    	   	     	  </div>
					  	      	     	    	   	     	   <span class="fl"><?=$val->schedule;?>%</span>
					  	      	     	    	  </div>
						      	    	  </div>
					      	    	 </div>
					      	    	  <ul class="clearfix proone_center_ul clear pt10">
					      	    	  	<li>预计年华收益:<span><?=$val->income;?>%</span></li>
					      	    	  	<li>投资期限:<span><?=($val->datatime*24);?>个月</span></li>
					      	    	  	<li>借款金额：<span><?=$val->rais_money;?>元</span></li>
					      	    	  </ul>  
         	  	    	  	   </div>
         	  	    	  	   <!--  -->
         	  	    	  	   <a href="/index/detail" class="block3_btn fl">立即投资</a>
         	  	    	  	</div>
         	  	    	  <!--listone  -->
						<?php endforeach ?>
         	  	    	  
         	  	    </div>
         	  	    <!-- end 项目列表 -->
         	  	     <div class="block3_prolist" style="display:none;">
         	  	     2
         	  	     </div>
         	  </div>
         </div>
         <!-- end block3 -->
         <div class="zscf_block4 mt30">
         	  <img src="{{ URL::asset('/home/images/block4_adver.png') }}">
         </div>
         <!-- end block4 -->
         <div class="zscf_block5 mt30 clearfix">
         	    <div class="zscf_block5_l fl mr20">
         	    	<h2 class="block3_tit clearfix block5_l_tit"><span class="block3_curspan news_span">行业动态</span><em><img src="{{ URL::asset('/home/images/shu.png') }}" alt=""></em><span class="news_span">媒体报道</span><a href="#">更多></a></h2>
         	    	<div class="block5_box">

	         	    	<ul class="news_ul">
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    	</ul>
	         	    	<ul class="news_ul" style="display:none;">
	         	    		<li><a href="#">6月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    		<li><a href="#">5月组团推荐排行榜</a></li>
	         	    	</ul>
	         	    </div>
         	    </div>
         	    <div class="zscf_block5_r fl">
         	    	 <h2 class="block5_r_tit clearfix"><span class="fl ">投资排行榜</span><em class="fr block5_r_tit_em"><a href="javascript:;" class="brt_acur">月排行</a><a href="javascript:;">周排行</a><a href="javascript:;">总排行</a></em></h2>
         	    	 <div class="rank_box">
         	    	 	  <div class="rank_list">
         	    	 	  	    <ul class="rank_list_ul">
         	    	 	  	    	<?php foreach ($user as $key => $val): ?>
         	    	 	  	    		 <li>
	         	    	 	  	    	 	 <em class="rank_bg0<?=$key+1;?>"><?=$key+1;?></em>
	         	    	 	  	    	 	 <a href="#"><?=$val->username;?></a>
	         	    	 	  	    	 	 <span>￥<?=$val->money;?></span>
	         	    	 	  	    	 	 <span><?=$val->num;?>%</span>
         	    	 	  	    	 	</li> 
         	    	 	  	    	<?php endforeach ?>               
         	    	 	  	    </ul>
         	    	 	  </div>
         	    	 	  <!-- end --> 
         	    	 	  <div class="rank_list" style="display:none;">
         	    	 	  	  <ul class="rank_list_ul">
         	    	 	  	    	<?php foreach ($user as $key => $val): ?>
         	    	 	  	    		 <li>
	         	    	 	  	    	 	 <em class="rank_bg0<?=$key+1;?>"><?=$key+1;?></em>
	         	    	 	  	    	 	 <a href="#"><?=$val->username;?></a>
	         	    	 	  	    	 	 <span>￥<?=$val->money;?></span>
	         	    	 	  	    	 	 <span><?=$val->num;?>%</span>
         	    	 	  	    	 	</li> 
         	    	 	  	    	<?php endforeach ?>
         	    	 	  	    </ul>
         	    	 	  </div>
         	    	 	  <!-- end -->
         	    	 	   <div class="rank_list" style="display:none;">
         	    	 	  	  <ul class="rank_list_ul">
         	    	 	  	    	<?php foreach ($user as $key => $val): ?>
         	    	 	  	    		 <li>
	         	    	 	  	    	 	 <em class="rank_bg0<?=$key+1;?>"><?=$key+1;?></em>
	         	    	 	  	    	 	 <a href="#"><?=$val->username;?></a>
	         	    	 	  	    	 	 <span>￥<?=$val->money;?></span>
	         	    	 	  	    	 	 <span><?=$val->num;?>%</span>
         	    	 	  	    	 	</li> 
         	    	 	  	    	<?php endforeach ?>
         	    	 	  	    </ul>
         	    	 	  </div>
         	    	 	  <!-- end -->
         	    	 </div>
         	    </div>
         </div>
         <!-- end block5 -->
         <div class="zscf_partner mt30">
         	 <h2 class="block3_tit clearfix "><span class="block3_curspan">合作伙伴</span></h2>
         	 <div class="partner_con">
         	      <div id="demo">
					<div id="indemo">
					<div id="demo1">
					<a href="#"><img src="{{ URL::asset('/home/images/ifri01.png') }}" border="0" /></a>
					<a href="#"><img src="{{ URL::asset('/home/images/360.png') }}" border="0" /></a>
					<a href="#"><img src="{{ URL::asset('/home/images/zxcf_logo.png') }}" border="0" /></a>
					<a href="#"><img src="{{ URL::asset('/home/images/notic_ban01.png') }}" border="0" /></a>
					</div>
					<div id="demo2"></div>
					</div>
					</div>
               <script>
				<!--
				var speed=10;
				var tab=document.getElementById("demo");
				var tab1=document.getElementById("demo1");
				var tab2=document.getElementById("demo2");
				tab2.innerHTML=tab1.innerHTML;
				function Marquee(){
				if(tab2.offsetWidth-tab.scrollLeft<=0)
				tab.scrollLeft-=tab1.offsetWidth
				else{
				tab.scrollLeft++;
				}
				}
				var MyMar=setInterval(Marquee,speed);
				tab.onmouseover=function() {clearInterval(MyMar)};
				tab.onmouseout=function()  {MyMar=setInterval(Marquee,speed)};
				-->
				</script>

          	 </div>
         </div>
	</div>
</div>
<!-- footer start -->
<div class="zscf_aboutus_wper">
	  <div class="zscf_aboutus px1000 clearfix">
	  	    <div class="zscf_aboutus_l fl">
	  	    	   <ul class="zscf_aboutus_lul clearfix">
	  	    	   	  <li class="pt10"><a href="#"><img src="images/app.png" alt=""></a>
	  	    	   	  </li>
	  	    	   	  <li>
	  	    	   	  <p class="pb20">服务热线</p>
	  	    	   	  <strong>400-027-0101</strong>
	  	    	   	  </li>
	  	    	   	  <li>
	  	    	   	  	  <p class="pb10 linkpic">
	  	    	   	  	     <a href="#"><img src="images/ft_sina.png" alt=""></a>
	  	    	   	  	     <a href="#"><img src="images/ft_weixin.png" alt=""></a>
	  	    	   	  	     <a href="#"><img src="images/ft_erji.png" alt=""></a>
	  	    	   	  	  </p>
	  	    	   	  	  <p><a href="#">kefu@zhongxincaifu.com</a></p>
	  	    	   	  </li>
	  	    	   </ul>
	  	    </div>
	  	    <!-- end left -->
	  	    <div class="zscf_aboutus_r fl clearfix">
	  	    	 <a href="#" class="fl ft_ewm"><img src="images/ft_erweima.png" alt=""></a>
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
		  <p class="fl">© 2014 zhongxincaifu &nbsp;  &nbsp;&nbsp;   中兴财富金融信息服务股份有限公司 &nbsp;&nbsp;&nbsp;    来源:<a href="http://down.admin5.com" target="_blank">A5源码</a></p>
		  <p class="fr">
		    <a href="#"><img src="images/360.png" alt=""></a>
		    <a href="#"><img src="images/kexin.png" alt=""></a>
		    <a href="#"><img src="images/norton.png" alt=""></a>
		  </p>
	</div>
</div>
<!-- footer end -->
</body>
</html>
<script language="JavaScript">
	// 找对象
	function fun_my(){
		self.location='/my/index'; 
	}

</script>