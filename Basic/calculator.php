<?php
$num1=$_POST["txt_no1"];
$num2=$_POST["txt_no2"];

if(isset($_POST["btn_add"]))
{
	$result=$num1+$num2;
}
if(isset($_POST["btn_sub"]))
{
	$result=$num1-$num2;
}
if(isset($_POST["btn_mul"]))
{
	$result=$num1*$num2;
}
if(isset($_POST["btn_div"]))
{
	$result=$num1/$num2;
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form3" name="form3" method="post" action="">
<table width="200" border="1">
  <tr>
    <td>Number1</td>
    <td>
      <label for="txt_no1"></label>
      <input type="text" name="txt_no1" id="txt_no1" value="<?php echo $num1?>"5 />
    </td>
  </tr>
  <tr>
    <td>Number2</td>
    <td>
      <label for="txt_no2"></label>
      <input type="text" name="txt_no2" id="txt_no2" value="<?php echo $num2?>" />
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="btn_add" id="add" value="Add" />
      <input type="submit" name="btn_sub" id="sub" value="Sub" />
      <input type="submit" name="btn_mul" id="mul" value="Mul" />
      <input type="submit" name="btn_div" id="div" value="Div" />
      
    </td>
  </tr>
  <tr>
    <td>Result</td>
    <td><?php echo $result; ?></td>
  </tr>
</table>
</form>
</body>
</html>
