<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyProfile</title>
</head>

<body>
<?php
	 include("../Assets/connection/connection.php");
	
	 session_start();
	 $sel="select * from tbl_user where user_id='".$_SESSION["userid"]."'";
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
	 ?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td colspan="2"><img src="" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label for="text_no1"></label>
      <?php echo $row["user_name"]?></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="text_no2"></label><?php echo $row["user_contact"]?></td> 
    
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="text_no3"></label><?php echo $row["user_email"]?></td>
     
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="text_no4"></label><?php echo $row["user_address"]?>
      </td>
    </tr>
   
  </table>
</form>
</body>
</html>