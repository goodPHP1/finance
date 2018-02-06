<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>invest</title>
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
<div class="invest_con_wper">
	  <div class="invest_con px1000">
	  	     <div class="product_choose">
	  	     	    <h2 class="product_tit clearfix">
	  	     	       <em class="proall fl">全部理财产品</em>
	  	     	       <div class="clearfix fl">
	  	     	       <span class="product_curspan"><img src="images/invest_pic01.png"> 新手体验标</span>
	  	     	       <span><img src="images/invest_pic02.png"> 项目列表</span>
	  	     	       <span><img src="images/invest_pic03.png"> 债权转让</span>
	  	     	       </div>
	  	     	      
	  	     	    </h2>
	  	     	    <div class="product_box">
	  	     	    	  <div class="product_list">
	  	     	    	  	     <div class="invest_prochoose">
				  	       	      <p><span>项目期限：</span><a href="#" class="inpro_cura">不限</a><a href="#">小于1个月</a><a href="#">1-3个月</a><a href="#">4-6个月</a><a href="#">7-12个月</a></p>
				  	       	      <p><span>项目状态：</span><a href="#" class="inpro_cura">不限</a><a href="#">所有借款</a><a href="#">正在招标的借款</a><a href="#">已成功借款</a><a href="#">已完成借款</a></p>
				  	       	      <p><span>项目收益：</span><a href="#" class="inpro_cura">不限</a><a href="#">10%以下</a><a href="#">10%-15%</a><a href="#">15%-20%</a><a href="#">20%-30%</a></p>
				  	       	      <p><span>项目类型：</span><a href="#" class="inpro_cura">不限</a><a href="#">信用标</a><a href="#">抵押标</a></p>
	  	                     </div>
	  	     	    	  </div>
	  	     	    	  <!--  -->
	  	     	    	  <div class="product_list" style="display:none;">
	  	     	    	  	  
	  	     	    	  </div>
	  	     	    	  <!--  -->
	  	     	    	  <div class="product_list" style="display:none;">
	  	     	    	  	  3
	  	     	    	  </div>
	  	     	    	  <!--  -->

	  	     	    </div>
	  	     </div>
	  	     <form action="/index/sou" method="get">
	  	     <input type="text" name="sou" id="sou"><input type="submit" value="搜索">
	  	     </form>
	  	     <!-- end block -->
	  	    <h3 class="sort_tit mt30"><em>排序</em>
	  	    <span>综合排序</span>
	  	    <span><a href="/index/invest">收益率</a><img src="images/invest_jiantou.png" alt=""></span>
	  	    <!-- <span><a href="/index/invest">发布时间</a><img src="images/invest_jiantou.png" alt=""></span> -->
	  	    <!-- <span><a href="/index/invest">项目期限</a><img src="images/invest_jiantou.png" alt=""></span> -->
	  	    </h3>
	  	    <div class="product_list mt20">
	  	    <?php foreach ($data as $key => $value): ?>
	  	    	
	  	    	     <div class="prolist_one prolist_one_bl01 mt20">
	  	    	           <h2 class="prolist_one_tit"><?php if($value->pledge=1){echo "信用";}else if($value->pledge=0){echo "抵押";}?>     </span>{{$value->corporate_name}}
                           </h2>
                           <ul class="prolist_one_ul clearfix">
                           	   <li>
                           	   	   年华收益：<strong>{{$value->income}}%</strong><br>
                           	   	   还款方式：{{$value->repayment}}
                           	   </li>
                           	   <li>
                           	   	   剩余期限：<i>{{$value->term}}</i>天<br>
                                    保障机构：{{$value->guarantee}}
                           	   </li>
                           	   <li class="prolist_press">
                           	   	   募集金额：<strong>{{$value->rais_money}}.00</strong> 元 <br>
                                   认购进度：<span class="ui-progressbar-mid ui-progressbar-mid-100">{{$value->schedule}}%</span>
                           	   </li>
                           	   <li class="prolist_btn">
                           	   	    <a href="/index/detail/?i_id={{$value->i_id}}" class="pro_btn">立即投资</a>
                           	   </li>
                           </ul>
	  	             </div>
	  	    <?php endforeach ?>
	  	    
	  	             <!-- end one -->
	  	              <p class="pagelink">
	  	              <!-- <input type="button" value="上一页" onclick="shang()" name="shang" id="shang"> -->
	  	              	 <!-- <a href=""></a> -->
	  	              	  <!-- class="pglink_cura" -->
	  	                 <!-- <input type="button" value="1" id="page"> -->
	  	                 <!-- <input type="button" value="下一页" id="xia" name="xia"> -->
	  	                 <!-- <a href="#" onclick="xia()"></a> -->
	  	                 {{$data->links()}}
	  	              </p>
	  	             <!-- pagelink end -->
	  	            
	  	    </div>
	  </div>
</div>
<!-- footer start -->
@include('common.bottom')
<!-- footer end -->
</body>
</html>
<script language="JavaScript">
	// 找对象
	function fun_my(){
		self.location='/my/index'; 
	}

</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script>
var page = $("#page").val();
	$("#shang").click(function(){
		// var page = $("#page").val();
		// alert(page-1)
		$.ajax({
			type:'get',
			url:'index/fenye',
			data:'page='+page,
			dataType: 'json',
			success:function(){

			}
		})
	})
	// $("#xia").click(function(){
	// 	// var page = $("#page").val();
	// 	alert(page)
	// })
</script>