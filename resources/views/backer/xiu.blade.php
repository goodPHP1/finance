<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台修改商品信息</title>
</head>
<body>
	<center>
		<form action="/backer/update" method="get">
		<h2><font color="red">修改公司名称</font></h2>
			<table>
			<?php foreach ($data as $key => $value): ?>
				<input type="hidden" name="i_id" value="{{$value->i_id}}"> 
				<tr>
					<td>公司名称</td>
					<td><input type="text" name="upname" id="" onfocus="javascript:if('{{$value->corporate_name}}'==this.value)this.value='';" onblur="javascript:if(''==this.value)this.value='{{$value->corporate_name}}'" value="{{$value->corporate_name}}"></td>
				</tr>
			<?php endforeach ?>
				<tr clospan='2'>
					<td><input type="submit" value="修改"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>