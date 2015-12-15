<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>添加留言页面</h2>
	<form action="doAction.php?act=addMsg" method='post'>
	<table border='1' width='100%' bgcolor='#abcdef' cellspacing='0' cellpadding='0'>
	<tr>
		<td>留言者昵称</td>
		<td><input type="text" name="username" id="" placeholder='请输入您的昵称'/></td>
	</tr>
	<tr>
		<td>标题</td>
		<td><input type="text" name="title" id="" placeholder='请输入标题'/></td>
	</tr>
	<tr>
		<td>内容</td>
		<td><textarea name="content" id="" cols="50" rows="10" placeholder='请输入内容'></textarea></td>
	</tr>
	<tr>
		<td>心情</td>
		<td>
		<input type="radio" name="mood" id="" value='1.jpg' checked='checked'/><img src="images/1.jpg" alt="" />
		<input type="radio" name="mood" id="" value='2.jpg' /><img src="images/2.jpg" alt="" />
		<input type="radio" name="mood" id="" value='3.jpg' /><img src="images/3.jpg" alt="" />
		<input type="radio" name="mood" id="" value='4.jpg' /><img src="images/4.jpg" alt="" />
		<input type="radio" name="mood" id="" value='5.gif' /><img src="images/5.gif" alt="" />
		</td>
	</tr>
	<tr>
		<td colspan='2'><input type="submit" value="确定" /></td>
	</tr>
	
	
	</table>
	</form>
</body>
</html>