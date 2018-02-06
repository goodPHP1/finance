<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>个人主页</title>
    <base href="{{ URL::asset('/home/js/') }}">
    <base href="{{ URL::asset('/home/css/') }}">
    <base href="{{ URL::asset('/home/images/') }}">
    <meta name="Keywords" content="大融小贷 个人主页" />
    <meta name="Description" content="大融小贷 个人主页" />
    <link href="{{ URL::asset('/home/css/UserCSS.css') }}" rel="stylesheet" type="text/css" />
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
                        <li><a class="current" href="javascript:;">个人主页</a></li><li><a href="/my/info">个人资料</a></li><li>
                            <a href="/my/approve">认证管理</a></li><li><a href="/my/pwd">密码设置</a></li><li><a href="/my/recommend">推荐有奖</a></li></ul>
                </li>
                <li class="item" id="user_menu_funds" name="user_menu_funds">
                    <h3 class="t2">
                        资金管理<span title="折叠"></span></h3>
                    <ul class="sub">
                         <li><a href="资金记录.htm">资金记录</a></li><li><a href="/my/top_up">充值记录</a></li><li><a href="提现中心.htm">提现记录</a></li><li><a href="三方托管.htm">三方托管</a></li></ul>
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
                        <li><a  href="我的贷款.htm">我的贷款</a></li><li><a href="/my/repay">偿还贷款</a></li><li><a href="/my/statistical">贷款统计</a></li></ul>
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
            <div class="ucenter">
                <div class="ucenter-info mt10">
                    <div class="info-title">
                        <h5>
                            我的个人主页</h5>
                    </div>
                    <div class="info">
                        <ul class="info-img">
                            <li>
                                <img src="images/1.gif" class="avatar" /></li></ul>
                        <div class="info-main">
                            <div class="row">
                            <?php foreach ($data as $k => $v): ?>                           
                                <label>
                                    用户名：</label>{{$v->username}}</div>
                            <div class="row">
                                <label>
                                    注册时间：</label>{{$v->time}}</div>
                            <div class="row">
                                <label>
                                    所在地：</label>{{$v->price}}</div>
                            <div class="row">
                                <label>
                                    角色：</label><span class="orange">{{$v->role}}</span></div>
                            <div class="row">
                                <label>
                                    个人统计：</label><span class="orange">{{$v->tongji}}</span>&nbsp;条贷款记录 ， 共计&nbsp;<span class="orange">{{$v->yuan}}</span>&nbsp;元
                                ； <span class="orange">{{$v->tender}}</span>&nbsp;条投标记录 ， 共计&nbsp;<span class="orange">{{$v->yuann}}</span>&nbsp;元
                                。
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                </div> 
                    <?php endforeach ?>
                <div class="ucenter-info mt10">
                <div class="ucenter-tab-box">

                        <ul class="u-tab clearfix">
                            <li class="current"><a>我关注的用户</a></li>
                            <li><a>关注我的用户</a></li>
                            <li><a>投标记录</a></li>
                            <li><a>贷款记录</a></li>
                        </ul>
                </div>
                <div id="tab_box">
                    <div class="u-form-wrap">
                        <div>
                            <table border="1">
                                <tr>
                                    <th>用户名</th>
                                    <th>电话</th>
                                    <th>邮箱</th>
                                    <th>年龄</th>
                                    <th>性别</th>
                                    <th>出生日期</th>
                                    <th>出生地</th>
                                </tr>
                                <?php foreach ($user as $k => $v): ?>
                                    <tr>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->tel}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{{$v->age}}</td>
                                        <td>{{$v->sex}}</td>
                                        <td>{{$v->day}}</td>
                                        <td>{{$v->price}}</td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>     
                    <div class="u-form-wrap" style="display: none;">
                        <div>张三&nbsp;&nbsp;&nbsp;&nbsp;男&nbsp;&nbsp;&nbsp;&nbsp;21&nbsp;&nbsp;&nbsp;&nbsp;1294262871     </div>
                        <div>李四&nbsp;&nbsp;&nbsp;&nbsp;男&nbsp;&nbsp;&nbsp;&nbsp;22&nbsp;&nbsp;&nbsp;&nbsp;1294262871     </div>
                        <div>王武&nbsp;&nbsp;&nbsp;&nbsp;男&nbsp;&nbsp;&nbsp;&nbsp;30&nbsp;&nbsp;&nbsp;&nbsp;1294262871     </div>
                    </div>              
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            <table border="1">
                                <tr>
                                    <th>投资公司</th>
                                    <th>投资利润</th>
                                    <th>投资钱数</th>
                                    <th>投资说明</th>
                                    <th>合作公司</th>
                                    <th>投资时间</th>
                                    <th>投资人</th>
                                    <th>投资状态</th>
                                    <th>利益</th>
                                </tr>
                                <?php foreach ($res as $key => $val): ?>
                                    <tr>
                                        <td>{{$val->corporate_name}}</td>
                                        <td>{{$val->income}}</td>
                                        <td>{{$val->rais_money}}</td>
                                        <td>{{$val->repayment}}</td>
                                        <td>{{$val->guarantee}}</td>
                                        <td>{{$val->date}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->schedule}}</td>
                                        <td>{{$val->term}}</td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div> 
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                        <table border="1">
                            <tr>
                                <th>贷款人</th>
                                <th>贷款时间</th>
                                <th>贷款金额</th>
                                <th>利息</th>
                                <th>利息金额</th>
                            </tr>
                      
                            <?php foreach ($dai as $key => $value): ?>
                              <tr>
                                <td>{{$value->user}}</td>
                                <td>{{$value->date}}</td>
                                 <td>{{$value->money}}</td>
                                <td>{{$value->interest}}</td>
                                <td>{{$value->recycle}}</td>
                              </tr>
                                
                            <?php endforeach ?>  
                            </table>
                           
                        </div> {{$dai->links()}}
                    </div>
                </div>                
            </div>
        
            <script type="text/javascript">

                var $div_li = $(".ucenter-tab-box ul li");

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
        <!-- /.u-main -->
    </div>
	<div style="text-align:center;">
<p>来源：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
