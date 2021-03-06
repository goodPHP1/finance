﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>用户中心 - 大融小贷</title>
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
    <div class="row" style="margin-top: 10px;">
    </div>
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
        <!-- /.u-menu -->
        <div class="u-main">
            <div class="u-tab-wrap">
                <ul class="u-tab clearfix">
                    <li class="current"><a>待偿还贷款</a></li><li><a>已还清贷款</a></li><li style="display: none;">
                        <a>还款详情</a></li><li style="display: none;"><a>提前还款</a></li></ul>
            </div>
            <div id="tab-box">
                <div id="repay_list_box" class="u-form-wrap" style="padding: 15px;">
                    <div style="margin-bottom: 20px;">
                        <table class="u-table th12 td12">
                            <tr>
                                <th width="10%">
                                    编号
                                </th>
                                <th width="25%">
                                    标题
                                </th>
                                <th width="10%">
                                    金额
                                </th>
                                <th width="8%">
                                    期限
                                </th>
                                <th width="8%">
                                    利率
                                </th>
                                <th width="10%">
                                    状态
                                </th>
                                <th width="10%">
                                    完成时间
                                </th>
                                <th width="10%">
                                    操作
                                </th>
                                <th width="10%">
                                    操作
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a target="_blank" href="#" class="imp f14">1</a>
                                </td>
                                <td>
                                    <a target="_blank" href="#" class="imp f14">12</a>
                                </td>
                                <td>
                                    <i class="red">￥12</i>
                                </td>
                                <td>
                                    <i class="red">12天</i>
                                </td>
                                <td>
                                    <i class="red">13%</i>
                                </td>
                                <td>
                                    <i class="red">12</i>
                                </td>
                                <td>
                                </td>
                                <td class="i-item-btn">
                                    <a href="#" class="i-btn-txt1 repay-back">还 款</a>
                                </td>
                                <td class="i-item-btn">
                                    <a href="#" class="i-btn-txt1 repay-early">提前还款</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="repay_ok_box" class="u-form-wrap" style="padding: 15px; display: none;">
                    <table class="u-table th12 td12">
                        <tr>
                            <th width="10%">
                                编号
                            </th>
                            <th width="25%">
                                标题
                            </th>
                            <th width="10%">
                                金额
                            </th>
                            <th width="8%">
                                期限
                            </th>
                            <th width="8%">
                                利率
                            </th>
                            <th width="10%">
                                状态
                            </th>
                            <th width="10%">
                                完成时间
                            </th>
                            <th width="10%">
                                合同
                            </th>
                            <th width="10%">
                                操作
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <a target="_blank" href="#" class="imp f14">1</a>
                            </td>
                            <td>
                                <a target="_blank" href="#" class="imp f14">12</a>
                            </td>
                            <td>
                                <i class="red">￥12</i>
                            </td>
                            <td>
                                <i class="red">12天</i>
                            </td>
                            <td>
                                <i class="red">13%</i>
                            </td>
                            <td>
                                <i class="red">12</i>
                            </td>
                            <td>
                            </td>
                            <td>
                                <a alt="电子合同" title="电子合同" href="#"><span class="ico ico-ht"></span></a>
                            </td>
                            <td>
                                <a href="#" class="i-btn-txt1 repay-back">还款详情</a>
                            </td>
                        </tr>
                    </table>
                    <div class="page-wrap">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            var $div_li = $(".u-tab-wrap ul li");

            $div_li.click(function () {

                $(this).addClass("current").siblings().removeClass("current");

                var div_index = $div_li.index(this);

                $("#tab-box>div").eq(div_index).show().siblings().hide();

            }).hover(function () {

                $(this).addClass("hover");

            }, function () {

                $(this).removeClass("hover");

            });
        </script>
        <!-- /.u-main -->
    </div>
    <!-- /.row -->
</body>
</html>
