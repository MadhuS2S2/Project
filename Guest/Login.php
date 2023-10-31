<?php
	 include("../Assets/connection/connection.php");
	
	 session_start();
	 
	if(isset($_POST['btnlogin']))
	{
		$selQry="select * from tbl_admin where admin_email='".$_POST['txtuname']."' and admin_password='".$_POST['txtpass']."'";
        $dataAdmin=mysql_query($selQry);
		$rowAdmin=mysql_fetch_array($dataAdmin);
		$countAdmin=mysql_num_rows($dataAdmin);
;				
		$selUser="select * from tbl_user where user_email='".$_POST['txtuname']."' and user_password='".$_POST['txtpass']."'";
        $dataUser=mysql_query($selUser);
		$rowUser=mysql_fetch_array($dataUser);
		$countUser=mysql_num_rows($dataUser);
		
	/*	$selManager="select * from tbl_manager where manager_email='".$_POST['txtuname']."' and manager_password='".$_POST['txtpass']."' and  manager_status='1'";
        $dataManager=mysql_query($selManager);
		$rowManager=mysql_fetch_array($dataManager);
		$countManager=mysql_num_rows($dataManager);*/
		
		
		
        if($countAdmin>0)
         {
              $_SESSION['adminname']=$rowAdmin["admin_name"];
              $_SESSION['adminid']=$rowAdmin["admin_id"];
			  
              header('location:../Admin/AdminHomepage.php');
         }
		else  if($countUser>0)
         {
              $_SESSION['username']=$rowUser["user_name"];
              $_SESSION['userid']=$rowUser["user_id"];
			  
              header('location:../User/HomePage.php');
         }
		 /*else  if($countManager>0)
         {
              $_SESSION['societyname']=$rowManager["manager_name"];
              $_SESSION['societyid']=$rowManager["manager_id"];
			  
              header('location:../Manager/Homepage.php');
         }*/
      	else
	  	{
                  echo "<script> alert('Invalid Username or password')</script>";
	  	}
   }
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form name="frm1" method="post">
<table cellpadding="10" style="border-collapse:collapse;" border="1" align="center">
 
  
  <tr>
    <td width="117">Email</td>
    <td width="120"><input type="text" name="txtuname" id="txtuname" required="required" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtpass" id="txtpass" required="required" /></td>
  </tr>
  <tr>
    
    <td colspan="2" align="center"><input type="submit" name="btnlogin" value="Login" /></td>  </tr>
  <tr>
    <td colspan="2" align="center"><a href="UserRegistration.php">NewUser</a></td>
  </tr>

</table>
<p align="center"><label></label></p>

</form>
</body>
</html>