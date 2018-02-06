<!DOCTYPE html>
<html>
<head>
    <title>密码管理</title>
     <base href="{{ URL::asset('/home/js/') }}">
    <base href="{{ URL::asset('/home/css/') }}">
    <base href="{{ URL::asset('/home/images/') }}">
    <script src="js/ops.js" type="text/javascript"></script>
    <link href="css/UserCSS.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
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
                        <li><a href="/my/index">个人主页</a></li><li><a href="/my/index">个人资料</a></li><li><a href="/my/approve">
                            认证管理</a></li><li><a class="current" href="/my/pwd">密码设置</a></li><li><a href="/my/recommend">推荐有奖</a></li></ul>
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
        <div class="u-main">
            <div id="tab_menu">
                <ul class="u-tab clearfix">
                    <li class="current"><a>登陆密码</a></li>
                    <li><a>支付密码</a></li>
                </ul>
            </div>
            <div id="tab_box">
                <div class="u-form-wrap">                 
                    <div>
                        <div class="main f_r">
           <div class="uc_title m_10">
              <label class="current"><span>密码管理</span></label>
         </div>
          <div class="form_content">
             <div class="uc_title2 m_10"><span class="f_r">带<b class="red">*</b>号的项目为必填项</span><strong>修改密码</strong></div>
                <form action='/my/uppwd' method='get'>
            <table class="form_table" cellpadding="0" cellspacing="0">
                <col width="200px" />
                <col />
                <tr>
                    <th><span class="red">*</span>原有密码：</th><td><input type='password'  name="fpassword"  alt='请输入原有密码'  /><label>原密码</label></td>
                </tr>
                <tr>
                    <th><span class="red">*</span>你想要的新密码：</th><td><input type='password' class="normal" name="password" pattern='^\w{6,32}$' alt='密码由英文字母、数字组成，长度6-32位' bind='repassword' /><label>密码由英文字母、数字组成，长度6-32位</label></td>
                </tr>
                <tr>
                    <th><span class="red">*</span>请再次输入新密码：</th><td><input type='password' class="normal" name="repassword" pattern='^\w{6,32}$' alt='密码由英文字母、数字组成，长度6-32位' bind='password' /><label>密码由英文字母、数字组成，长度6-32位</label></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <label class="btn"><input type="submit" value="修改密码" /></label>
                        <label class="btn"><input type="reset" value="取消" /></label>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div></div>
                </div>
                <div class="u-form-wrap" style="display: none;">                    
                    <div>
                        这是支付密码设置</div>
                </div>                
            </div>
        </div>
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
</body>
</html>
