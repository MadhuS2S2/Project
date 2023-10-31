<?php 

if(isset($_POST["form_sub"]))
{	
	$fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    $marital=$_POST["status"];
    $dep=$_POST["department"];
    $bp=$_POST["bp"];
}
if($bp>=10000)
{
	$TA=($bp/100)*40;
	$DA=($bp/100)*35;
	$HRA=($bp/100)*30;
	$LIC=($bp/100)*25;
	$PF=($bp/100)*20;
	$deduction=$LIC+$PF;
	$net=$bp+$TA+$DA+$HRA-($LIC+$PF); 
}
else if($bp>=5000 and $bp<10000)
{
	$TA=($bp/100)*35;
	$DA=($bp/100)*30;
	$HRA=($bp/100)*25;
	$LIC=($bp/100)*20;
	$PF=($bp/100)*15;
	$deduction=$LIC+$PF;
	$net=$bp+$TA+$DA+$HRA-($LIC+$PF); 
}
else if($bp<5000)
{
	$TA=($bp/100)*30;
	$DA=($bp/100)*25;
	$HRA=($bp/100)*20;
	$LIC=($bp/100)*15;
	$PF=($bp/100)*10;
	$deduction=$LIC+$PF;
	$net=$bp+$TA+$DA+$HRA-($LIC+$PF); 
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Form</title>
</head>
<body>
<form method="POST">
<table align="center" border="1">
<tr>
<td>Firstname</td>
<td><input type="text" name="fname"/></td>
</tr>
<tr>
<td>Secondname</td>
<td><input type="text" name="lname"/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" value="male" name="gender">male<input type="radio" value="female" name="gender">female</td>
</tr>
<tr>
<td>Marital</td>
<td><input type="radio" value="single" name="status">single<input type="radio" value="married" name="status">married</td>
</tr>
<tr>
<td>Department</td>
<td><select name="department">
<option value=" ">--select--</option>
<option value="BCA">BCA</option>
<option value="B Com">B Com</option>
<option value="Mathematics">Mathematics</option>
<option value="BTTM">BTTM</option>
</select>
<tr>
<td>Basic Salary</td>
<td><input type="number" name="bp"></td>
</tr>
<tr>
<td align=center colspan=2><input type="submit" name="form_sub"/><input type="reset" value="Cancel"/></td>
</tr>
<tr></tr>
<tr>
<td>Name</td>
<td><?php 
if($gender=="male" and $marital=="single")
{
	echo "Mr. ",$fname," ",$lname;
}
else if($gender=="male" and $marital=="married")
{
	echo "Mr. ",$fname," ",$lname;
}
else if($gender=="female" and $marital=="single")
{
	echo "Ms. ",$fname," ",$lname;
}
else if($gender=="female" and $marital=="married")
{
	echo "Mrs. ",$fname," ",$lname;
}
?>

</td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $gender;?></td>
</tr>
<tr>
<td>Marital</td>
<td><?php echo $marital;?></td>
</tr>
<tr>
<td>Department</td>
<td><?php echo $dep;?></td>
</tr>
<tr>
<td>Basic salary</td>
<td><?php echo $bp;?></td>
</tr>
<tr>
<td>T.A</td>
<td><?php echo $TA;?></td>
</tr>
<tr>
<td>D.A</td>
<td><?php echo $DA;?></td>
</tr>
<tr>
<td>HRA</td>
<td><?php echo $HRA;?></td>
</tr>
<tr>
<td>LIC</td>
<td><?php echo $LIC;?></td>
</tr>
<tr>
<td>P.F</td>
<td><?php echo $PF;?></td>
</tr>
<tr>
<td>DEDUCTION</td>
<td><?php echo $deduction;?></td>
</tr>
<tr>
<td>NET</td>
<td><?php echo $net;?></td>
</tr>
</table>
</form>
</body>
</html>