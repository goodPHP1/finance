<!DOCTYPE html>
<html>
<head>
    <title>个人资料</title>
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
            <div id="tab_menu">
                <ul class="u-tab clearfix">
                    <li class="current"><a>个人详细信息</a></li>
                </ul>
            </div>
            <div id="tab_box">
                <div class="u-form-wrap">
                    <div class="uf-tips">
                        <span class="red">
         <form action="/my/up" method="get">           
             <table class="form_table" width="100%" cellpadding="0" cellspacing="0">
                <col width="120px" />
                <col />         
                <tr>
                    <th>姓名：</th>
                    <td><input type="text" name="name" value="<?php echo $data[0]->name;?>"></td>
                </tr>
                <tr>
                    <th>性别：</th>
                    <td><input type="text" name="sex" value="<?php echo $data[0]->sex;?>">
                    </td>
                </tr>
                <tr>
                    <th>出生日期：</th>
                    <td><input type="text" name="day" value="<?php echo $data[0]->day;?>"></td>
                </tr>
                 <tr>
                    <th>年龄：</th>
                    <td><input type="text" name="age" value="<?php echo $data[0]->age;?>"></td>
                </tr>
                <tr>
                    <th>所在地区：</th>
                    <td>
                        <input type="text" name="price" value="<?php echo $data[0]->price;?>">
                    </td>
                </tr>
                <tr>
                    <th>邮箱地址：</th>   
                    <td>
                    <input type="text" name="email" value="<?php echo $data[0]->email;?>">
                    </td>
                </tr>
                <tr>
                    <th>手机号码：</th>                      
                    <td><input type="text" name="tel" value="<?php echo $data[0]->tel;?>"></td>
                </tr>
             <tr>
                   <td>
                   <label class="btn"><input type="submit" value="修改基本信息" />
                   </label>
                   </td>
            </tr>
            </table> 
        </form>                                  
                </span> 
                    </div>
                 </form>
                </div>
                <div class="u-form-wrap" style="display: none;">
                    <div class="uf-tips">
                        <span class="red">                 
      
                    </div>
                </div>
                <div class="u-form-wrap" style="display: none;">
                    <div class="uf-tips">
                        <span class="red">*</span> 为必填项，所有资料均会严格保密。
                    </div>
                    <div>
                        这是联系人信息</div>
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
