<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>我的投资</title>
    <base href="{{ URL::asset('/home/js/') }}">
    <base href="{{ URL::asset('/home/css/') }}">
    <base href="{{ URL::asset('/home/images/') }}">
    <link href="css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/ops.js" type="text/javascript"></script>
    <script src="js/UserJS.js" type="text/javascript"></script>
    <script src="js/jquery.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery.template.min.js" type="text/javascript"></script>
    <script src="js/funds.js" type="text/javascript"></script>
</head>
<body>
    <div class="row">
        <div class="u-menu">
                      <ul class="u-nav" id="user_menu">
                <li class="item" id="user_menu_my" name="user_menu_my">
                    <h3 class="t1">
                        我的大融小贷<span title="折叠"></span></h3>
                    <ul class="sub">
                        <li><a class="current" href="javascript:;">个人主页</a></li><li><a href="/my/info">个人资料</a></li><li>
                            <a href="/my/approve">认证管理</a></li><li><a href="/my/pwd">密码设置</a></li><li><a href="/my/recommend">推荐有奖</a></li></ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资金管理<span title="折叠"></span></h3>
                    <ul class="sub">
                         <li><a href="/my/money">资金记录</a></li><li><a href="/my/top_up">充值记录</a></li><li><a href="/my/withdrawal">提现记录</a></li><li><a href="/my/san">三方托管</a></li></ul>
                </li>
                <li class="item" id="user_menu_invest" name="user_menu_invest">
                    <h3 class="t4">
                        理财管理<span title="折叠"></span></h3>
                    <ul class="sub">
                       <li><a href="/my/invest">我的投资</a></li><li><a href="/my/rights">债权转让</a></li><li><a href="/my/automatic">自动投标</a></li><li>
                            <a href="/my/financial">理财统计</a></li></ul>
                </li>
                <li class="item" id="user_menu_loan" name="user_menu_loan">
                    <h3 class="t3">
                        贷款管理<a name="user_login"></a><span title="折叠"></span></h3>
                    <ul class="sub">
                        <li><a  href="/my/myloan">我的贷款</a></li><li><a href="/my/repay">偿还贷款</a></li><li><a href="/my/statistical">贷款统计</a></li></ul>
                </li>
            </ul>
            <script type="text/javascript">
                var menuClosed = Ops.getCookie('menuClosed');

                $(".item h3 span").click(function () {

                    menuClosed = Ops.getCookie('menuClosed');
                    if (menuClosed == undefined || menuClosed == null) {
                        menuClosed = '';
                        Ops.setCookie('menuClosed', menuClosed);
                    }
                    //console.log(menuClosed+',click;;;');  
                    $(this).parent().parent().toggleClass('bg-slide');
                    $(this).parent().parent().find(".sub").slideToggle('fast');

                    if ($(this).attr('title') == '折叠') {
                        $(this).attr('title', '展开');
                    } else {
                        $(this).attr('title', '折叠');
                    }

                    var pid = $(this).parent().parent().attr('id');

                    if ($(this).parent().parent().hasClass('bg-slide') && menuClosed.indexOf("#" + pid + "#") == -1) {
                        var cookies = menuClosed + '#' + pid + '#';
                    } else {
                        var cookies = menuClosed.replace("#" + pid + "#", '');
                    }
                    Ops.setCookie('menuClosed', cookies);
                });

                if (menuClosed != null) {
                    var closedMatch = menuClosed.match(/([a-z_]+)/g);
                    for (var i in closedMatch) {
                        var idObj = $('#' + closedMatch[i]);
                        idObj.toggleClass('bg-slide');
                        idObj.find(".sub").hide();
                        idObj.find('h3 span').attr('title', '展开');
                    }
                } else {
                    $("#user_menu_loan h3 span").click();
                }
            </script>
        </div>
        <div class="u-main">
            <div class="u-tab-wrap">
                <ul class="u-tab clearfix">
                    <li val="invest_loan_box" class="current"><a>我投标的贷款</a></li><li val="invest_loan_tendering_box">
                        <a>投标中的贷款</a></li><li val="invest_loan_waiting_box"><a>等待放款的投资</a></li><li val="invest_repay_box">
                            <a>回收中的贷款</a></li><li val="invest_return_box"><a>已回收的贷款</a></li></ul>
                <!-- /.u-tab -->
            </div>
            <div id="tab_box">
                <div id="invest_loan_box" class="u-form-wrap" style="padding: 0;">
                    <div class="list-raq" style="padding-left: 6px;">
    <form action="update/?i_id=<?php echo $data[0]->i_id;?>" method="get">
        {{csrf_field()}}
    <input type = "hidden" name='i_id' value = "<?php echo $i_id; ?>">
        <table border="1">
             <tr>
                <td>用户名</td>
               <td>
               <input type="text" name="name" value="<?php echo $data[0]->corporate_name;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交">提交</td>
                <td></td>
            </tr>
        </table>
    </form>      
                    </div>                   
                    <!-- /.main-list -->                   
                    <div class="page-wrap">
                    </div>
                </div>
                <!-- /.u-form-wrap -->
                <div id="invest_repay_box" class="u-form-wrap" style="padding: 20px; display: none;">
                    <div class="search-box" style="margin-bottom: 15px;">
                        <table class="u-table">                           
                                <tr>
                                    <td colspan="3">
                                        <div class="tab-search" style="padding-top: 5px;">
                                            <div class="i-item" style="padding-left: 50px;">
                                                <label class="i-til" style="width: 50px;">
                                                    从：</label><input type="text" class="i-inp i-date" id="search_sdate" style="width: 80px;
                                                        height: 17px;" /></div>
                                            <!-- /.i-item -->
                                            <div class="i-item" style="padding-left: 50px;">
                                                <label class="i-til" style="width: 50px;">
                                                    到：</label><input type="text" class="i-inp i-date" id="search_edate" style="width: 80px;
                                                        height: 17px;" /></div>
                                            <!-- /.i-item -->
                                            <div class="i-item" style="padding-left: 90px;">
                                                <label class="i-til" style="width: 90px;">
                                                    贷款编号：</label><input type="text" class="i-inp" id="search_lid" style="width: 80px;
                                                        height: 17px;" /></div>
                                            <!-- /.i-item -->
                                            <div class="i-item-btn">
                                                <button id="do_search" class="i-btn-txt3">
                                                    查询</button></div>
                                        </div>
                                    </td>
                                </tr>                            
                        </table>
                    </div>                   
                    <table class="u-table th12 td12">                       
                            <tr>
                                <th>
                                    待收本息总额
                                </th>
                                <th>
                                    待赚利息总额
                                </th>
                                <th>
                                    待收本金总额
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                            </tr>
                        
                    </table>
                    <table class="u-table th12 td12" style="margin-top: 15px;">                       
                            <tr>
                                <th>
                                    借款编号
                                </th>
                                <th>
                                    借款人
                                </th>
                                <th>
                                    第几期
                                </th>
                                <th>
                                    还款日
                                </th>
                                <th>
                                    回收本息
                                </th>
                                <th>
                                    剩余本息
                                </th>
                                <th>
                                    逾期天数
                                </th>
                                <th>
                                    电子合同
                                </th>
                                <th>
                                    操&nbsp;作
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="imp f14"></a>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <i class="red"></i>
                                </td>
                                <td>
                                    <i class="red"></i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    {repay.out_days}
                                </td>
                                <td>
                                    <a style="color: green;" href="#"><span class="ico ico-ht"></span></a>
                                </td>
                                <td>
                                    <div class="i-item-btn" style="height: 25px;">
                                        <a href="#" class="i-btn-txt1 transfer-post">转让</a></div>
                                </td>
                            </tr>                       
                    </table>
                    <div class="page-wrap">
                    </div>
                </div>
                <!-- /.u-form-wrap -->
                <div id="invest_return_box" class="u-form-wrap" style="padding: 10px; display: none;">                   
                    <table class="u-table th12 td12">                      
                            <tr>
                                <th>
                                    借款编号
                                </th>
                                <th>
                                    借款人
                                </th>
                                <th>
                                    借出日期
                                </th>
                                <th>
                                    借出金额
                                </th>
                                <th>
                                    年利率
                                </th>
                                <th>
                                    回收金额
                                </th>
                                <th>
                                    电子合同
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="imp f14"></a>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <i class="red"></i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    <i class="red"></i>
                                </td>
                                <td>
                                    <i class="red">￥</i>
                                </td>
                                <td>
                                    <a style="color: green;" href="#"><span class="ico ico-ht"></span></a>
                                </td>
                            </tr>                       
                    </table>                   
                    <div class="page-wrap">
                    </div>
                </div>
            </div>
            <script type="text/javascript">

                var $div_li = $(".u-tab-wrap ul li");

                $div_li.click(function () {

                    $(this).addClass("current").siblings().removeClass("current");

                    var div_index = $div_li.index(this);

                    $("#tab_box>div").eq(div_index).show().siblings().hide();

                }).hover(function () {

                    $(this).addClass("hover");

                }, function () {

                    $(this).removeClass("hover");

                });

            </script>
        </div>
    </div>
</body>
</html>
