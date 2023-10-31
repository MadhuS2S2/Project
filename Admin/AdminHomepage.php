<?php

 session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HomePage</title>
</head>

<body>
<table width="506" border="1">
  <tr>
    <td>Welcome </td>
    <td><?php echo $_SESSION['adminname']?></td>
  </tr>
  <tr>
    <td><a href="AdminRegistration.php">AdminRegistration</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <td><a href="District.php">District</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
   <td><a href="Place.php">Place</a></td>
    <td>&nbsp;</td>
  </tr>
 
   <tr>
   <td><a href="ManagerRegistartion.php">Manager Registration</a></td>
    <td>&nbsp;</td>
  </tr>
  
     <tr>
   <td><a href="ManagerList.php">ManagerList</a></td>
    <td>&nbsp;</td>
  </tr>
  
  
   <tr>
   <td><a href="ChangePassword.php">ChangePassword</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td><a href="Userlist.php">UserList</a></td>
    <td>&nbsp;</td>
 </tr>
  <tr>
    <td><a href="UserListAccepted.php">UserListAccepted</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="UserListRejected.php">UserListRejected</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
     <td><a href="UserComplaint.php">UserComplaint</a></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
     <td><a href="UserComplaintSolvedList.php">UserComplaintSolvedList</a></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
     <td><a href="UserListRejected.php">UserListRejected</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>