<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台展示</title>
    <base href="{{ URL::asset('/home/js/') }}">
    <style>
a{ text-decoration:none; }
    </style>
</head>
<body>
    <center>
        <h2><font color="red">后台添加</font></h2>
        <h3><input type="button" value="商品添加" id="tian"><input type="button" value="商品展示" id="zhan"></h3>
        <div id="show">
            <div id="show1">
                <form action="/backer/add" method="get">
                    <table>
                        <tr>
                            <td>公司名称</td>
                            <td><input type="text" name="corporate_name" id=""></td>
                        </tr>
                        <tr>
                            <td>募资金额</td>
                            <td><input type="text" name="rais_money" id=""></td>
                        </tr>
                        <tr>
                            <td>还款方式</td>
                            <td>
                                <input type="radio" name="repayment" id="" value="按月付息，到期还本" checked="">按月付息，到期还本<br>
                                <input type="radio" name="repayment" id="" value="每天付息，还到老"  disabled="disabled">每天付息，还到老
                            </td>
                        </tr>
                        <tr>
                            <td>借款状态</td>
                            <td>
                                <input type="radio" name="pledge" id="" value="1" checked="">信用<br>
                                <input type="radio" name="pledge" id="" value="0"  disabled="disabled">抵押
                            </td>
                        </tr>
                        <tr>
                            <td>担保公司</td>
                            <td><input type="text" name="guarantee" id=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="借款"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="show2">
                <table>
                <h5><input type="text" name="suo" id="suo"><input type="button" value="搜索" id="sou"></h5>
                    <tr>
                        <th>公司名称</th>
                        <th>募资金额</th>
                        <th>还款方式</th>
                        <th>借款状态</th>
                        <th>担保公司</th>
                        <th>认购进度</th>
                        <th>项目剩余期限</th>
                        <th>项目收益</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($data as $key => $value): ?>
                        <tr>
                            <td><a href="/backer/xiu?i_id={{$value->i_id}}">{{$value->corporate_name}}</a></td>
                            <td>{{$value->rais_money}}</td>
                            <td>{{$value->repayment}}</td>
                            <td>{{$value->pledge}}</td>
                            <td>{{$value->guarantee}}</td>
                            <td>{{$value->schedule}}</td>
                            <td>{{$value->term}}</td>
                            <td>{{$value->income}}</td>
                            <td>{{$value->date}}</td>
                            <td><a href="/backer/del?i_id={{$value->i_id}}">删除</a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                {{$data->links()}}
            </div>
        </div>
    </center>
</body>
</html>
<script src="js/jquery-1.8.3.min.js"></script>
<script>
    $("#tian").click(function(){
        $("#show1").show();
        $("#show2").hide();
    })
    $("#zhan").click(function(){
        $("#show2").show();
        $("#show1").hide();
    })
    $("#sou").click(function(){
        // var suo = $("#suo").val)();
        // alert(suo)
    })
</script>