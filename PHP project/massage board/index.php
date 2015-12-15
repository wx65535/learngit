<?php 
date_default_timezone_set('PRC');
//得到massage.txt中的留言信息（形式为序列化的数组（字符串））
echo '<pre>';
$filename='massage.txt';
$str=file_get_contents($filename);
$msgInfo=unserialize($str);
if(!is_array($msgInfo))
{
    exit ('没有留言，<a href="addMsg.php">请添加</a>');
}
if(count($msgInfo)==0)
{
    exit('没有留言，<a href="addMsg.php">请添加</a>');
}
echo '</pre>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>查看留言页面</h2>
	<table border='1' width='100%' bgcolor='#abcdef' cellspacing='0' cellpadding='0'>
    	<tr>
    		<td>编号</td>
    		<td>留言者昵称</td>
    		<td>标题</td>
    		<td>内容</td>
    		<td>时间</td>
    		<td>ip地址</td>
    		<td>心情</td>
    		<td>操作</td>
    	</tr>
    	<?php $i=1;foreach ($msgInfo as $key=>$val){?>
    	<tr>
    		<td><?php echo $i;?></td>
    		<td><?php echo $val['username'];?></td>
    		<td><?php echo $val['title'];?></td>
    		<td><?php echo $val['content'];?></td>
    		<td><?php echo date('Y-m-d H:i:s',$val['time']);?></td>
    		<td><?php echo $val['ip'];?></td>
    		<td><img src="images/<?php echo $val['mood'];?>" alt="" /></td>
    		<td><a href="editMsg.php?id=<?php echo $key;//将要编辑的留言的键名传递出去，以便寻找到该留言?>">编辑留言</a>|<a href="doAction.php?act=delMsg&id=<?php echo $key;?>">删除留言</a></td>
    	</tr>
    	
        <?php $i++;}?>
        <tr>
        <td colspan='8' align='center'><a href="addMsg.php">继续添加</a></td>
        </tr>
        
	</table>
</body>
</html>