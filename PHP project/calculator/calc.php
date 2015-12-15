<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="calc.php" method="post">
		<input type="text" name="num1" id="" />
		<select name="op" id="">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">%</option>
		</select>
		<input type="text" name="num2" id="" />
		<input type="submit" name='btn' value="calculate" />
	</form>
</body>	
</html>
<?php 
$num1=$_REQUEST['num1'];
$op=$_REQUEST['op'];
$num2=$_REQUEST['num2'];
$btn=$_REQUEST['btn'];
if(isset($btn))
{
    if(is_numeric($num1)&&is_numeric($num2))
    {
        if($op=='+')
        {
            $res=$num1+$num2;
        }
        elseif($op=='-')
        {
            $res=$num1-$num2;
        }
        elseif($op=='*')
        {
            $res=$num1*$num2;
        }
        elseif($op=='/')
        {
            if($num2==0)
            {
                exit('Invalid input');
            }
            else $res=$num1/$num2;
        }
        elseif($op=='%')
        {
            $res=$num1%$num2;
        }
    }
    else exit('Invalid input');
echo $num1.$op.$num2.'='.$res;
}

?>