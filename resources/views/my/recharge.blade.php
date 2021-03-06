﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>充值 用户中心 - 大融小贷</title>
    <base href="{{ URL::asset('/home/js/') }}">
    <base href="{{ URL::asset('/home/css/') }}">
    <base href="{{ URL::asset('/home/images/') }}">
    <meta name="Keywords" content="大融小贷 用户中心" />
    <meta name="Description" content="大融小贷 用户中心" />
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
            <div id="tab_menu">
                <ul class="u-tab clearfix">
                    <li class="current"><a>网银充值</a></li>
                    <li><a>支付宝充值</a></li>
                    <li><a>国付宝充值</a></li>
                    <li><a>充值记录</a></li>
                </ul>
            </div>
            <div id="tab_box">
                <div class="u-form-wrap">
                    <div>
                        <div class="uf-tips">
                            <p>
                                1、所有投标保证金将由第三方平台托管。</p>
                            <p>
                                2、即时充值所产生的费用，由一起好平台承担。</p>
                            <p>
                                3、请注意您的银行卡充值限制，以免造成不便。</p>
                            <p>
                                4、如果充值金额没有及时到账，请和客服联系。</p>
                            <p class="red">
                                5、充值进来的资金，若不投资，24小时后才可提现，收取1%服务费；若三天内网站未发标，而需提现的，免收服务费。</p>
                        </div>
                        <div class="m-form-box mt10">
                            <div>
                                <div class="m-form-til">
                                    <b>在线充值</b></div>
                                <ul id="recharge_banklist" class="bank-lists clearfix" style="display: block;">
                                    <li>
                                        <label for="icbc">
                                            <input name="bank" value="icbc" type="radio" /><span class="ico-b ico-icbc"></span></label></li>
                                    <li>
                                        <label for="ccb">
                                            <input name="bank" value="ccb" type="radio" /><span class="ico-b ico-ccb"></span></label></li>
                                    <li>
                                        <label for="cmb">
                                            <input name="bank" value="cmb" type="radio" /><span class="ico-b ico-cmb"></span></label></li>
                                    <li>
                                        <label for="boc">
                                            <input name="bank" value="boc" type="radio" /><span class="ico-b ico-boc"></span></label></li>
                                    <li>
                                        <label for="abc">
                                            <input name="bank" value="abc" type="radio" /><span class="ico-b ico-abc"></span></label></li>
                                    <li>
                                        <label for="bocom">
                                            <input name="bank" value="bocom" type="radio" /><span class="ico-b ico-bocom"></span></label></li>
                                    <li>
                                        <label for="spdb">
                                            <input name="bank" value="spdb" type="radio" /><span class="ico-b ico-spdb"></span></label></li>
                                    <li>
                                        <label for="citic">
                                            <input name="bank" value="citic" type="radio" /><span class="ico-b ico-citic"></span></label></li>
                                    <li>
                                        <label for="cmbc">
                                            <input name="bank" value="cmbc" type="radio" /><span class="ico-b ico-cmbc"></span></label></li>
                                    <li>
                                        <label for="gdb">
                                            <input name="bank" value="gdb" type="radio" /><span class="ico-b ico-gdb"></span></label></li>
                                    <li>
                                        <label for="hxbc">
                                            <input name="bank" value="hxbc" type="radio" /><span class="ico-b ico-hxbc"></span></label></li>
                                    <li>
                                        <label for="cib">
                                            <input name="bank" value="cib" type="radio" /><span class="ico-b ico-cib"></span></label></li>
                                    <li>
                                        <label for="ceb">
                                            <input name="bank" value="ceb" type="radio" /><span class="ico-b ico-ceb"></span></label></li>
                                    <li>
                                        <label for="psbc">
                                            <input name="bank" value="psbc" type="radio" /><span class="ico-b ico-psbc"></span></label></li>
                                    <li>
                                        <label for="sdb">
                                            <input name="bank" value="sdb" type="radio" /><span class="ico-b ico-sdb"></span></label></li>
                                    <li>
                                        <label for="pab">
                                            <input name="bank" value="pab" type="radio" /><span class="ico-b ico-pab"></span></label></li>
                                    <li>
                                        <label for="bob">
                                            <input name="bank" value="bob" type="radio" /><span class="ico-b ico-bob"></span></label></li>
                                    <li>
                                        <label for="shb">
                                            <input name="bank" value="shb" type="radio" /><span class="ico-b ico-shb"></span></label></li>
                                    <li>
                                        <label for="bjrc">
                                            <input name="bank" value="bjrc" type="radio" /><span class="ico-b ico-bjrc"></span></label></li>
                                    <li>
                                        <label for="srcb">
                                            <input name="bank" value="srcb" type="radio" /><span class="ico-b ico-srcb"></span></label></li>
                                    <li>
                                        <label for="hzcb">
                                            <input name="bank" value="hzcb" type="radio" /><span class="ico-b ico-hzcb"></span></label></li>
                                    <li>
                                        <label for="njcb">
                                            <input name="bank" value="njcb" type="radio" /><span class="ico-b ico-njcb"></span></label></li>
                                    <li>
                                        <label for="czsb">
                                            <input name="bank" value="czsb" type="radio" /><span class="ico-b ico-czsb"></span></label></li>
                                    <li>
                                        <label for="bohb">
                                            <input name="bank" value="bohb" type="radio" /><span class="ico-b ico-bohb"></span></label></li>
                                    <li>
                                        <label for="hkbea">
                                            <input name="bank" value="hkbea" type="radio" /><span class="ico-b ico-hkbea"></span></label></li>
                                </ul>
                                <div class="i-item i-long-item">
                                    <label class="i-til" style="text-align: right;">
                                        <span class="red">*</span><b>充值金额：</b></label><div class="i-right">
                                            <input id="recharge_money" name="money" type="text" class="i-inp" style="width: 90px;" /><p
                                                class="tips">
                                                <span class="ico-error" id="recharge_money_error"></span>
                                            </p>
                                            <div class="i-inp-tips">
                                                <p>
                                                    单笔充值金额应大于1元且不能超过100万元</p>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.i-item -->
                                <div class="i-item i-long-item">
                                    <label class="i-til" style="text-align: right;">
                                        充值手续费：</label><div class="i-right">
                                            <div class="i-txt">
                                                <i id="recharge_fee_show">0.00</i>元
                                            </div>
                                        </div>
                                </div>
                                <!-- /.i-item -->
                                <div class="i-item i-long-item">
                                    <label class="i-til" style="text-align: right;">
                                        实际到账金额：</label><div class="i-right">
                                            <div class="i-txt">
                                                <i id="recharge_money_show">0.00</i>元</div>
                                        </div>
                                </div>
                                <!-- /.i-item -->
                                <div class="i-item i-long-item">
                                    <label class="i-til" style="text-align: right;">
                                        目前账户可用余额：</label><div class="i-right">
                                            <div class="i-txt">
                                                <i id="user_money_now">0.00</i>元</div>
                                        </div>
                                </div>
                                <!-- /.i-item -->
                                <div class="i-item i-long-item hasborderbot">
                                    <label class="i-til" style="text-align: right;">
                                        充值后账户可用余额：</label><div class="i-right">
                                            <div class="i-txt">
                                                <i id="user_money_show">0.00</i>元</div>
                                        </div>
                                </div>
                                <!-- /.i-item -->
                                <div id="recharge_online_msg" class="i-item" style="display: none;">
                                </div>
                                <div class="i-item-btn">
                                    <button type="submit" id="recharge_online_submit" class="i-btn-recharge">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-form-wrap" style="display: none;">
                    <div>
                        支付宝充值</div>
                </div>
                <div class="u-form-wrap" style="display: none;">
                    <div>
                        国付宝充值</div>
                </div>
                <div class="u-form-wrap" style="display: none;">
                    <div id="recharge_record_box" class="u-form-wrap">
                        <div class="m-sub-til" style="padding: 0;">
                            充值记录</div>
                        <div class="search-box" style="margin-bottom: 15px;">
                            <table class="u-table">
                                <tr>
                                    <td colspan="3">
                                        <div class="tab-search" style="padding-top: 5px;">
                                            <div class="i-item" style="padding-left: 60px;">
                                                <label class="i-til" style="width: 60px;">
                                                    状态：</label><div class="i-select" id="search_status" style="width: 90px;">
                                                        <input type="hidden" value="0" /><span class="sel-til">所有</span><ul class="sel-list">
                                                            <li val="0"><a>所有</a></li><li val="1"><a>失败</a></li><li val="2"><a>无效</a></li><li
                                                                val="11"><a>充值中</a></li><li val="12"><a>待确认</a></li><li val="21"><a>充值成功</a></li></ul>
                                                    </div>
                                            </div>
                                            <!-- /.i-item -->
                                            <div class="i-item" style="padding-left: 30px;">
                                                <label class="i-til" style="width: 30px;">
                                                    从：</label><input type="text" class="i-inp i-date" id="search_sdate" style="width: 80px;
                                                        height: 17px;" /></div>
                                            <!-- /.i-item -->
                                            <div class="i-item" style="padding-left: 30px;">
                                                <label class="i-til" style="width: 30px;">
                                                    到：</label><input type="text" class="i-inp i-date" id="search_edate" style="width: 80px;
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
                        <table class="u-table">
                            <tr>
                                <th width="12%">
                                    订单号
                                </th>
                                <th width="10%">
                                    时间
                                </th>
                                <th width="10%">
                                    金额
                                </th>
                                <th width="15%">
                                    充值方式
                                </th>
                                <th width="15%">
                                    交易号
                                </th>
                                <th width="10%">
                                    状态
                                </th>
                                <th width="8%">
                                    说明
                                </th>
                                <th width="8%">
                                    操作
                                </th>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td style="color: red;">
                                </td>
                                <td style="color: green;">
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                        <div class="page-wrap">
                        </div>
                        <span class="none">共0条记录</span> <span class="none">共0条记录</span> <span class="btn">首页</span>
                        <a href="#" class="btn">首页</a> <a href="#" class="btn">上一页</a> <span class="btn">上一页</span>
                        <span class="current"></span><a href="#"></a><a href="#" class="btn">下一页</a> <span
                            class="btn">下一页</span> <a href="#" class="btn">尾页</a> <span class="btn">尾页</span>
                        <span class="pageinp" title="回车跳转">直达
                            <input type="text" id="pageinp">
                            页 </span><span class="none">共0页</span> <span class="none">共0页</span>
                    </div>
                </div>
            </div>
            <!-- JQ切换方法 -->
            <script type="text/javascript">

                var $div_li = $("#tab_menu ul li");

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
