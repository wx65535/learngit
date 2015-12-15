<?php
//写一个彩色验证码
$string='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$code='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/> 
	<title>Document</title>
</head>
<body>
<h2>注册页面</h2>
	<form action="doReg1.php" method='post'>
		<table border='1' cellpadding='0' cellspacing='0' bgcolor='#abcdef' width='80%'>
		    <!-- 获取用户名 -->
			<tr>
				<td align='right'>用户名</td>
				<td><input type="text" name="username" id="" placeholder='请输入用户名'/>用户名长度为5-10，以字母开头</td>
			</tr>
			<!-- 获取密码 -->
	        <tr>
				<td align='right'>密码</td>
				<td><input type="password" name="password" id="" placeholder='请输入密码'/>密码不能为空</td>
			</tr>
			<!-- 确认密码 -->
			<tr>
				<td align='right'>确认密码</td>
				<td><input type="password" name="password1" id="" placeholder='请输入密码'/>两次密码须一致</td>
			</tr>
			<!-- 获取邮箱 -->
			<tr>
				<td align='right'>邮箱</td>
				<td><input type="email" name="email" id="" placeholder='请输入邮箱'/>邮箱名称至少含有@</td>
			</tr>
			<!-- 获取年龄 -->
			<tr>
				<td align='right'>年龄</td>
				<td><input type="number" name="age" id="" placeholder='请输入年龄'/>年龄在1-100之间</td>
			</tr>
			<!-- 验证码 -->
			<tr>
				<td align='right'>验证码</td>
				<td><input type="text" name="verify" id="" placeholder='请输入验证码(不区分大小写)'/><?php echo $code;?>
				<input type="hidden" name="verify1" value='<?php echo strip_tags($code);?>'/>
				</td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="提交" /></td>
			</tr>
		</table>
	</form>
</body>
</html>