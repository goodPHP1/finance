<div class="headbar">
	<div class="operating">
		<div class="search f_r">
			<form name="searchuser" action="{url:/}" method="get">
				<input type='hidden' name='controller' value='member' />
				<input type='hidden' name='action' value='member_list' />
				<select class="auto" name="search">
					<option value="u.username">用户名</option>
					<option value="m.true_name">姓名</option>
					<option value="m.mobile">手机</option>
					<option value="m.email">Email</option>
				</select>
				<input class="small" name="keywords" type="text"  />
				<button class="btn" type="submit"><span class="sch">搜 索</span></button>
			</form>
		</div>

		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="window.location='/admin/insert'"><span class="addition">添加会员</span></button></a>
		<a href="javascript:void(0);" onclick="selectAll('check[]')"><button class="operating_btn" type="button"><span class="sel_all">全选</span></button></a>
		<a href="javascript:void(0);" onclick="delModel({form:'member_list',msg:'确定要删除所选中的会员吗？<br />删除的会员可以从回收站找回。'})"><button class="operating_btn" type="button"><span class="delete">批量删除</span></button></a>
		<a href="javascript:void(0);"><button class="operating_btn" type="button" onclick="window.location='{url:/member/recycling}'"><span class="recycle">回收站</span></button></a>
		<a href="javascript:void(0);" onclick="balance_add()"><button class="operating_btn" type="button"><span class="recharge">预付款管理</span></button></a>
	</div>
</div>

<form action="{url:/member/member_reclaim}" method="post" name="member_list" onsubmit="return checkboxCheck('check[]','尚未选中任何记录！')">
	<div class="content">
		<table id="list_table" class="list_table" border="1">
<!-- 			<colgroup>
				<col width="30px" />
				<col width="120px" />
				<col width="80px" />
				<col width="80px" />
				<col width="50px" />
				<col width="140px"/>
				<col width="80px" />
				<col width="70px" />
				<col width="50px" />
				<col width="125px" />
				<col width="120px" />
				<col width="120px" />
			</colgroup> -->
			<thead>
				<tr>
					<th>选择</th>
					<th>用户名</th>
					<th>会员等级</th>
					<th>姓名</th>
					<th>性别</th>
					<th>Email</th>
					<th>余额</th>
					<th>积分</th>
					<th>状态</th>
					<th>注册日期</th>
					<th>手机</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($data as $k => $v): ?>
				<tr>
					<td><input name="check[]" type="checkbox" value="{{$v->id}}" /></td>
					<td title="{echo:htmlspecialchars($item['username'])}">{{$v->name}}</td>
					<td title="{$group[$item['group_id']]}">{{$v->schedule}}</td>
					<td title="{echo:htmlspecialchars($item['true_name'])}">{{$v->name}}</td>
					<td>{{$v->sex}}</td>
					<td title="{echo:htmlspecialchars($item['email'])}">{{$v->email}}</td>
					<td title="{$item['balance']}">{{$v->rais_money}}</td>
					<td title="{$item['point']}">{{$v->term}}</td>
					<td title="{echo:Common::userStatusText($item['status'])}">{{$v->repayment}}</td>
					<td title="{$item['time']}">{{$v->date}}</td>
					<td title="{echo:htmlspecialchars($item['mobile'])}">{{$v->tel}}</td>
					<td>
						<a href="{url:/member/member_edit/uid/$item[user_id]}"><img class="operator" src="{skin:images/admin/icon_edit.gif}" alt="修改" /></a>
						<a href="javascript:void(0)" onclick="delModel({link:'{url:/member/member_reclaim/check/$item[user_id]}'})"><img class="operator" src="{skin:images/admin/icon_del.gif}" alt="删除" /></a>
					</td>
				</tr>
			<?php endforeach ?>				
			</tbody>
		</table>
	</div>
</form>

<script language="javascript">
//预加载
$(function(){
	var formObj = new Form('searchuser');
	formObj.init({'search':'{$search}'});
})

//预付款管理入口
function balance_add()
{
	if(!checkboxCheck('check[]','请选择要进行预付款操作的用户！'))
	{
		return;
	}

	art.dialog.open("{url:/member/member_balance}",{
	    title: '预付款管理',
	    ok:function(iframeWin, topWin)
	    {
	    	var formObject = iframeWin.document.forms['balanceForm'];
	    	if(formObject.onsubmit() == false)
	    	{
	    		return false;
	    	}

	    	//进行post提交
	    	var postData = $('[name="member_list"]').serialize()+'&'+$(formObject).serialize();
	    	$.post('{url:/member/member_recharge}',postData,function(json){
	    		if(json.flag == 'success')
	    		{
	    			tips('操作成功');
	    			window.location.reload();
	    			return false;
	    		}
	    		else
	    		{
	    			alert(json.message);
	    			return false;
	    		}
	    	},'json');
	    	return false;
		}
	});
}
</script>
