﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>用户中心 - 大融小贷</title>
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
    <script type="text/javascript">
        $(document).ready(function () { });
        function slideToggle() {
            $("#uf-tips").slideToggle(2000);
        }
    </script>
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
                    <li val="user_autobid_box" class="current"><a>自动投标设置</a></li></ul>
            </div>
            <div class="u-form-wrap">
                <span class="spreadbtn spreadbtn-bg" onclick="slideToggle()">自动投标说明&nbsp;>></span>
                <div class="uf-tips red" id="uf-tips" style="display: none;">
                    <p>
                        自动投标说明：
                    </p>
                    <p>
                        1、当贷款进入招标中后，自动投标程序即开始运行(2013年1月8日15:30起，自动方式一定会优先于手动方式)。
                    </p>
                    <p>
                        2、自动投标设置：
                        <br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 1) 若投标资金总额为-1，则表示自动投标总额不设上限；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 2) 若单次投标金额为-1，则表示单次投标金额是账户可用余额的整数部分；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 3) 若符合条件的自动投标总额超过当前可投总额，则单次投标金额不会超过贷款总额的20%；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 4) 当进度达到50%后，将暂停自动投标操作，待贷款进行10分钟后再继续；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 5) 投标设置成功后，正常情况将在0.5秒内生效。
                    </p>
                    <p>
                        3、自动投标规则：<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 1) 先按最后一次开启自动投标的时间先后顺序，若相同再按首次设置自动投标的先后顺序；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 2) 自动投标成功后，将重置顺序至投标队列队尾；
                        <br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 3) 每个用户每个标仅自动投标一次，已手动投过的标将不再自动投；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 4) 当自动账户余额少于50时，将自动暂停，待账户余额不少于50后，2分钟内自动开启并重新排名；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 5) 如果单个标首轮自动投标后的最后一位投标者剩余需投标金额不少于50，则保留排名等待下一个可投的标出现；<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 6) 当距离招标起始时间超过10分钟且自动投标总额和单次投标金额都为-1，则该用户对此标的自动投标次数不再限制。
                    </p>
                    <p class="green">
                        4、特别说明：<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 1) 当自动投标资金总额和单次投标金额设为-1后，只要你账户可用余额满足可投标条件，就会进行自动投标。<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 2) 当设置不满足条件(账户可用余额少于50)时，将自动暂停，待满足条件后将自动开启。<br />
                        &nbsp;&nbsp;&nbsp;&nbsp; 3) 如果你不想分散投资，可以选中单次集中投标选项。
                    </p>
                </div>
                <div id="autobid_form" class="mt10 newbg noborderleft">
                    <div class="m-form-box mt10">
                        <div class="m-form-til">
                            <b>我的自动投标</b></div>
                        <div class="i-item i-long-item" id="autobid_rank" style="display: none;">
                            <label class="i-til">
                                自动投标排名：</label><div class="i-right">
                                    <div class="i-txt">
                                        &nbsp; <span id="autobid_rank_show" style="color: green;"></span><span class="red">（您前面的自动排队资金总额：<i
                                            id="autobid_amount_show"></i> 元。） </span>
                                    </div>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                账户可用余额：</label><div class="i-right">
                                    <div class="i-txt">
                                        <i id="user_amount">0.00</i>元</div>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                自动投标总额：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="total" value="0" style="width: 60px; height: 20px;" />
                                    元
                                    <p class="tips red">
                                        (需为-1或不少于50的整数)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                单次投标金额：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="money" value="0" style="width: 60px; height: 20px;" />
                                    元
                                    <p class="tips red">
                                        (需为-1或不小于50且不大于自动投标总额的整数)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                年利&nbsp;率&nbsp;范&nbsp;围：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="apr_min" value="12" style="width: 30px; height: 20px;" />
                                    % &nbsp;—&nbsp;&nbsp;
                                    <input class="i-inp" type="text" name="apr_max" value="24" style="width: 30px; height: 20px;" />
                                    %
                                    <p class="tips red">
                                        (建议设置为12~24)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                贷款期限范围：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="month_min" value="1" style="width: 30px; height: 20px;" />
                                    月 &nbsp;—&nbsp;&nbsp;
                                    <input class="i-inp" type="text" name="month_max" value="24" style="width: 30px;
                                        height: 20px;" />
                                    月
                                    <p class="tips red">
                                        (有效值是1~24)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item" style="position: static;">
                            <label class="i-til">
                                贷款还款方式：</label><div class="i-right">
                                    <div class="i-select" style="width: 145px;">
                                        <input id="repay_method" type="hidden" name="repay_method" value="" /><span class="sel-til">不限</span><ul
                                            class="sel-list">
                                            <li val=""><a>不限</a></li><li val="m"><a>按月等额本息</a></li><li val="i"><a>按月付息，到期还本</a></li></ul>
                                    </div>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                信用等级范围：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="credit_min" value="1" style="width: 30px;
                                        height: 20px;" />
                                    星 &nbsp;—&nbsp;&nbsp;
                                    <input class="i-inp" type="text" name="credit_max" value="5" style="width: 30px;
                                        height: 20px;" />
                                    星
                                    <p class="tips red">
                                        (有效值是1~5)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item">
                            <label class="i-til">
                                单次集中投标：</label><div class="i-right">
                                    <input name="bidall" type="checkbox" value="1" style="vertical-align: -10px;">
                                    &nbsp;<span class="spreadbtn" obj="bidall-text" style="vertical-align: -7px;">查看说明</span><div
                                        class="i-txt" id="bidall-text" style="display: none;">
                                        <p class="tips red">
                                            (选中后：<br />
                                            如果单次投标金额不为-1，<br />
                                            则每次实际投标金额一定等于设置的单次投标金额。
                                            <br />
                                            如果单次投标金额为-1，<br />
                                            则每次实际投标金额由系统自动决定: 目前为不会少于可投余额的三分之一。)</p>
                                    </div>
                                </div>
                        </div>
                        <div class="i-item i-long-item hasborderbot">
                            <label class="i-til">
                                保留可用余额：</label><div class="i-right">
                                    <input class="i-inp" type="text" name="retain" value="0" style="width: 60px; height: 20px;" />
                                    元
                                    <p class="tips red">
                                        (需为不小于0的整数)</p>
                                </div>
                        </div>
                        <div class="i-item i-long-item hasborderbot" id="autobid_msg" style="text-align: center;">
                        </div>
                        <div class="i-item-btn i-item-btn2" style="text-align: center; height: 50px; line-height: 50px;">
                            <input type="hidden" name="do" value="" />
                            <button type="button" do="save" class="i-btn-txt1">
                                保 存</button>
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" do="close" class="i-btn-txt2">
                                关 闭</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.u-main -->
    </div>
</body>
</html>
