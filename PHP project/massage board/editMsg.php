<?php

echo '<pre>';
//得到要编辑留言的键名
$id=$_REQUEST['id'];
//得到massage.txt中的留言信息（形式为序列化的数组（字符串））
$filename='massage.txt';
$str=file_get_contents($filename);
$msgInfo=unserialize($str);
// print_r($msgInfo);
// echo $msgInfo[$id]['mood'];
echo '</pre>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>编辑留言页面</h2>
	<form action="doAction.php?act=editMsg&id=<?php echo $id;?>" method='post'>
	<table border='1' width='100%' bgcolor='#abcdef' cellspacing='0' cellpadding='0'>
	<tr>
		<td>留言者昵称</td>
		<td><input type="text" name="username" id="" placeholder='<?php echo $msgInfo[$id]['username'];?>'/></td>
	</tr>
	<tr>
		<td>标题</td>
		<td><input type="text" name="title" id="" placeholder='<?php echo $msgInfo[$id]['title'];?>'/></td>
	</tr>
	<tr>
		<td>内容</td>
		<td><textarea name="content" id="" cols="50" rows="10" placeholder='<?php echo $msgInfo[$id]['content'];?>'></textarea></td>
	</tr>
	<tr>
		<td>心情</td>
		<td>
		<input type="radio" name="mood" id="" value='1.jpg' <?php if ($msgInfo[$id]['mood']=='1.jpg') echo "checked='checked'";?>/><img src="images/1.jpg" alt="" />
		<input type="radio" name="mood" id="" value='2.jpg' <?php if ($msgInfo[$id]['mood']=='2.jpg') echo "checked='checked'";?>/><img src="images/2.jpg" alt="" />
		<input type="radio" name="mood" id="" value='3.jpg' <?php if ($msgInfo[$id]['mood']=='3.jpg') echo "checked='checked'";?>/><img src="images/3.jpg" alt="" />
		<input type="radio" name="mood" id="" value='4.jpg' <?php if ($msgInfo[$id]['mood']=='4.jpg') echo "checked='checked'";?>/><img src="images/4.jpg" alt="" />
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