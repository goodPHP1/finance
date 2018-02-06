<!DOCTYPE html>
<html>
<head>
    <title>推荐有奖</title>
    <base href="{{ URL::asset('/home/js/') }}">
    <base href="{{ URL::asset('/home/css/') }}">
    <base href="{{ URL::asset('/home/images/') }}">
    <link href="css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/ops.js" type="text/javascript"></script>
    <script src="js/UserJS.js" type="text/javascript"></script>
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
                        <li><a href="/my/index">个人主页</a></li><li><a href="/my/info">个人资料</a></li><li>
                            <a href="/my/approve">认证管理</a></li><li><a href="/my/pwd">密码设置</a></li><li><a class="current" href="/my/recommend">推荐有奖</a></li></ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资金管理<span title="折叠"></span></h3>
                    <ul class="sub">
                         <li><a href="资金记录.htm">资金记录</a></li><li><a href="充值中心.htm">充值记录</a></li><li><a href="提现中心.htm">提现记录</a></li><li><a href="三方托管.htm">三方托管</a></li></ul>
                </li>
                <li class="item" id="user_menu_invest" name="user_menu_invest">
                    <h3 class="t4">
                        理财管理<span title="折叠"></span></h3>
                    <ul class="sub">
                       <li><a href="/my/invest">我的投资</a></li><li><a href="债权转让.htm">债权转让</a></li><li><a href="自动投标.htm">自动投标</a></li><li>
                            <a href="理财统计.htm">理财统计</a></li></ul>
                </li>
                <li class="item" id="user_menu_loan" name="user_menu_loan">
                    <h3 class="t3">
                        贷款管理<a name="user_login"></a><span title="折叠"></span></h3>
                    <ul class="sub">
                       <li><a  href="我的贷款.htm">我的贷款</a></li><li><a href="偿还贷款.htm">偿还贷款</a></li><li><a href="贷款统计.htm">贷款统计</a></li></ul>
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
                    <li val="user_invite_box" class="current"><a>推荐有奖</a></li></ul>
            </div>
            <div id="user_invite_box" class="u-form-wrap" style="padding: 20px 50px 50px 30px;">
                <div class="hasbg" style="margin-bottom: 15px;">
                    <div class="i-item" style="color: red; font-size: 14px;">
                        复制下面的推荐注册链接，<br />
                        如果被推荐人累计净充值金额(减去提现总额)和有效投资均达5万元，
                        <br />
                        一次性奖励100元，该奖励将在下一个工作日内直接充入您的账户。
                        <br />
                        <span class="green">(注：目前只有金牌会员具有推荐资格)</span></div>
                    <div class="i-item-btn i-item-btn2">
                        <label class="i-til" style="font-size: 14px; font-weight: blod;">
                            推荐链接：</label><input id="invite_url" name="url" type="text" value="https://www.baidu.com
                                class="i-inp" style="width: 310px;" />
                        &nbsp;&nbsp;
                        <button id="user_invite_copy" type="button" class="i-btn-txt1">
                            复制链接</button></div>
                </div>
                <div id="main_list">
                    这是已经推荐的人的列表                     
                </div>
                <div class="page-wrap">

                </div>                
            </div>
        </div>
        <!-- /.u-main -->
    </div>
</body>
</html>
