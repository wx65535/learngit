<?php
//获取信息
header('content-type=text/html;charset:utf-8');
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$password1=$_REQUEST['password1'];
$email=$_REQUEST['email'];
$age=$_REQUEST['age'];
$verify=$_REQUEST['verify'];
$verify1=$_REQUEST['verify1'];
//检测用户名是否以字母开头
$ascii=ord($username[0]);
if(!(($ascii>=65 && $ascii<=90) || ($ascii>=97 && $ascii<=122)))
{
    exit('非法用户名');
}
//检测用户名长度是否为5-10
$usnlen=strlen($username);
if($usnlen<5 && $usnlen>10)
{
    exit('非法用户名');
}
//检测密码是否为空
$pwdlen=strlen($password);
if($pwdlen==0)
{
    exit('非法密码');
}
//检测两次密码输入是否一致
if($password!=$password1)
{
    exit('两次密码输入不一致');
}
//检测邮箱是否合法
if(strpos($email, '@')===false)
{
    exit('邮箱不合法');
}
//检测年龄是否在1-100之间
if($age<1 && $age>100)
{
    exit('年龄不合法');
}
//检测验证码输入是否一致
$ver=strtolower($verify);
$ver1=strtolower($verify1);
if(trim($ver)!=trim($ver1))
{
    exit('验证码输入不正确');
}
echo '注册成功，3秒后跳转到首页';
echo '<meta http-equiv="refresh" content="3;url=http://www.bilibili.com" />';

