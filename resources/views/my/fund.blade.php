﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>资金记录 用户中心 - 大融小贷</title>
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
                        <li><a href="个人主页.htm">个人主页</a></li><li><a href="个人资料.htm">个人资料</a></li><li><a href="认证管理.htm">
                            认证管理</a></li><li><a href="密码管理.htm">密码设置</a></li><li><a href="推荐有奖.htm">推荐有奖</a></li></ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资金管理<span title="折叠"></span></h3>
                    <ul class="sub">
                        <li><a class="current" href="资金记录.htm">资金记录</a></li><li><a href="充值中心.htm">充值记录</a></li><li>
                            <a href="提现中心.htm">提现记录</a></li>
                        <li><a href="三方托管.htm">三方托管</a></li></ul>
                </li>
                <li class="item" id="user_menu_invest" name="user_menu_invest">
                    <h3 class="t4">
                        理财管理<span title="折叠"></span></h3>
                    <ul class="sub">
                        <li><a href="我的投资.htm">我的投资</a></li><li><a href="债权转让.htm">债权转让</a></li><li><a href="自动投标.htm">自动投标</a></li><li>
                            <a href="理财统计.htm">理财统计</a></li></ul>
                </li>
                <li class="item" id="user_menu_loan" name="user_menu_loan">
                    <h3 class="t3">
                        贷款管理<a name="user_login"></a><span title="折叠"></span></h3>
                    <ul class="sub">
                         <li><a href="我的贷款.htm">我的贷款</a></li><li><a href="偿还贷款.htm">偿还贷款</a></li><li>
                            <a href="贷款统计.htm">贷款统计</a></li></ul>
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
                    <li class="current"><a>资金记录</a></li></ul>
            </div>
            <div class="u-form-wrap">
                <table class="u-table">
                    <tbody>
                        <tr>
                            <th>
                                资金总额<span class="etips" tips="资金总额=可用余额+冻结金额+待收总额"></span>
                            </th>
                            <th>
                                资金余额<span class="etips" tips="资金余额=可用余额+冻结金额"></span>
                            </th>
                            <th>
                                可用余额<span class="etips" tips="可用余额=资金总额-冻结总额-待收总额，账户余额可用于投标或者提现"></span>
                            </th>
                            <th>
                                冻结金额<span class="etips" tips="冻结总额是您当前暂时不能使用的金额，冻结总额包括投标冻结、借款保证金冻结、提现冻结"></span>
                            </th>
                            <th>
                                待收总额<span class="etips" tips="待收总额是您借款给别人但是还没收回的本息总额"></span>
                            </th>
                            <th>
                                充值总额<span class="etips" tips="充值总额是您在网站充值成功后收入总额"></span>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                0.00
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                0.00
                            </td>
                            <td>
                                0.00
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="m-sub-til" style="padding: 0;">
                    资金记录查询</div>
                <table class="u-table">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <div class="tab-search">
                                    <div class="i-item">
                                        <label class="i-til">
                                            类型：</label><div class="i-select" id="search_type">
                                                <input type="hidden" value="0" /><span class="sel-til">所有</span>
                                                <ul class="sel-list">
                                                    <li val="0"><a>所有</a></li>
                                                    <li val="1"><a>充值</a></li>
                                                    <li val="2"><a>提现</a></li>
                                                    <li val="30"><a> 充值</a></li>
                                                    <li val="31"><a> 提现</a></li>
                                                    <li val="25"><a>提现冻结</a></li>
                                                    <li val="26"><a>提现失败</a></li>
                                                    <li val="3"><a>人工充值</a></li>
                                                    <li val="4"><a>人工扣款</a></li>
                                                    <li val="5"><a>投标冻结</a></li>
                                                    <li val="6"><a>投标成功</a></li>
                                                    <li val="7"><a>投标失败</a></li>
                                                    <li val="8"><a>招标成功</a></li>
                                                    <li val="9"><a>债权转让支出</a></li>
                                                    <li val="10"><a>债权转让收入</a></li>
                                                    <li val="32"><a>回收利息</a></li>
                                                    <li val="38"><a>回收本金</a></li>
                                                    <li val="14"><a>提前回收</a></li>
                                                    <li val="12"><a>回收本息</a></li>
                                                    <li val="17"><a>利息管理费</a></li>
                                                    <li val="36"><a>积分返现</a></li>
                                                    <li val="29"><a>推荐奖励</a></li>
                                                    <li val="24"><a>返还服务费</a></li>
                                                    <li val="35"><a>服务费</a></li>
                                                    <li val="34"><a>充值奖励</a></li>
                                                    <li val="28"><a>投标奖励</a></li>
                                                    <li val="37"><a> 提现失败</a></li>
                                                    <li val="41"><a> 提现成功</a></li>
                                                    <li val="40"><a>罚息收入</a></li>
                                                    <li val="11"><a>偿还本息</a></li>
                                                    <li val="33"><a>偿还利息</a></li>
                                                    <li val="13"><a>提前还款</a></li>
                                                    <li val="15"><a>身份验证手续费</a></li>
                                                    <li val="16"><a>提现手续费</a></li>
                                                    <li val="18"><a>借款服务费</a></li>
                                                    <li val="19"><a>借款管理费</a></li>
                                                    <li val="20"><a>逾期罚息</a></li>
                                                    <li val="21"><a>担保费用</a></li>
                                                    <li val="22"><a>实地考核费</a></li>
                                                    <li val="27"><a>委托代查费</a></li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="i-item" style="padding-left: 30px;">
                                        <label class="i-til" style="width: 30px;">
                                            从：</label><input type="text" class="i-inp i-date" id="search_sdate" style="width: 80px;
                                                height: 17px;" /></div>
                                    <div class="i-item" style="padding-left: 30px;">
                                        <label class="i-til" style="width: 30px;">
                                            到：</label><input type="text" class="i-inp i-date" id="search_edate" style="width: 80px;
                                                height: 17px;" /></div>
                                    <div class="i-item-btn">
                                        <button id="do_search" class="i-btn-txt3">
                                            查询</button></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="m-sub-til" style="padding: 0;">
                    资金历史记录</div>
                <table class="u-table">
                    <tr>
                        <th width="16%">
                            时间
                        </th>
                        <th width="20%">
                            类型
                        </th>
                        <th width="11%">
                            存入
                        </th>
                        <th width="11%">
                            支出
                        </th>
                        <th width="12%">
                            可用余额
                        </th>
                        <th width="12%">
                            冻结金额
                        </th>
                        <th width="13%">
                            备注
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <a target="_blank" href="#" class="blue2"></a>
                        </td>
                        <td>
                        </td>
                        <td style="color: red;">
                        </td>
                        <td style="color: green;">
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
                <span class="none">共0条记录</span> <span class="none">共0条记录</span> <span class="btn">首页</span>
                <a href="#" class="btn">首页</a> <a href="#" class="btn">上一页</a> <span class="btn">上一页</span>
                <span class="current"></span><a href="#"></a><a href="#" class="btn">下一页</a> <span
                    class="btn">下一页</span>&nbsp; <a href="#" class="btn">尾页</a> <span class="btn">尾页</span>
                <span class="pageinp" title="回车跳转">直达
                    <input type="text" id="pageinp" />
                    页 </span><span class="none">共0页</span> <span class="none">共{0}页</span>
            </div>
        </div>
    </div>
</body>
</html>
