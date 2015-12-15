<?php
header('content-type=text/html;charset=UTF-8');
//获得添加留言页面中的所有的值
$act=$_REQUEST['act'];
$username=$_REQUEST['username'];
$title=$_REQUEST['title'];
$content=$_REQUEST['content'];
//使用户html标记原样输出
$content=htmlentities($content);

$time=time();
$ip=$_SERVER['REMOTE_ADDR'];
$mood=$_REQUEST['mood'];
$mood=$mood=='5.gif'?mt_rand(1,4).'.jpg':$mood;
//得到要编辑留言的键名
$id=$_REQUEST['id'];
//若已有留言，则从留言文件massage.txt中取出留言（形式为序列化的数组（字符串））
$filename='massage.txt';
if(file_exists($filename) && filesize($filename)>0)
{
    $str=file_get_contents($filename);
    $msgInfo=unserialize($str);
}
//实现根据不同选择完成不同功能
//实现添加留言功能
if($act=='addMsg')
{
    if(strlen($username)>0&&strlen($title)>0&&strlen($content)>0)
    {
        $msgInfo[]=compact('username','title','content','time','ip','mood');
        $data=serialize($msgInfo);
        file_put_contents($filename, $data);
    }
    else
    {
        exit('请添加留言内容，<a href="index.php">查看留言</a>|<a href="editMsg.php">重新编辑</a>');
    }
        if($filename)
        {
            echo '添加留言成功，<a href="index.php">查看留言</a>|<a href="addMsg.php">继续添加</a>';
        }
        else
        {
            echo '添加留言失败<a href="addMsg.php">重新添加</a>';
        }
}
//实现编辑留言功能
else if($act=='editMsg')
{
    if(strlen($username)>0&&strlen($title)>0&&strlen($content)>0)
    {
        $msgInfo[$id]=compact('username','title','content','time','ip','mood');
        $data=serialize($msgInfo);
        file_put_contents($filename, $data);
    }
    else 
    {
        exit('请添加留言内容，<a href="index.php">查看留言</a>|<a href="editMsg.php">重新编辑</a>');
    }
        if($filename)
        {
            echo '编辑留言成功，<a href="index.php">查看留言</a>|<a href="addMsg.php">继续添加</a>';
        }
        else
        {
            echo '编辑留言失败<a href="addMsg.php">重新添加</a>';
        }
}
//实现删除留言功能
else if($act=='delMsg')
{
    $str=file_get_contents($filename);
    $msgInfo=unserialize($str);
    unset($msgInfo[$id]);
    $data=serialize($msgInfo);
    file_put_contents($filename, $data);
    if($filename)
    {
        echo '删除留言成功，<a href="index.php">查看留言</a>|<a href="addMsg.php">添加留言</a>';
    }
    else
    {
        echo '删除留言失败<a href="index.php">重新删除</a>';
    }
}









