<?php


include("../Assets/connection/connection.php");




if(isset($_POST["btn_sub"]))
  {
	     $name=$_POST["txtname"];
		 $contact=$_POST["txtcontact"];
		 $email=$_POST["txtemail"];
		 $password=$_POST["txtpassword"];
		 
		 $ins="insert into tbl_admin(admin_name,admin_contact,admin_email,admin_password)values('$name','$contact','$email','$password')";
		 mysql_query($ins);
		 
  }
  if($_GET["did"])
   {
	   $did=$_GET[did];
	   $delQry="delete from tbl_admin where admin_id='$did'";
	   mysql_query($delQry);
	   header("location:AdminRegistration.php");
   }
 ?>



<a href="HomePage.php">Home</a>
<form name="form1" method="post" action="">
  <table border="1" align="center" cellpadding='10' style="border-collapse:collapse">
    <tr>
      <td>Name</td>
      <td><label for="text_no1"></label>
      <input type="text" name="txtname" id="txtname"></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="text_no2"></label>
      <input type="text" name="txtcontact" id="txtcontact"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="text_no3"></label>
      <input type="text" name="txtemail" id="txtemail"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="text_no4"></label>
      <input type="text" name="txtpassword" id="txtpassword"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_sub" id="btn_sub" value="Submit">
      <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel"></td>
    </tr>
  </table>
</form>


<table border="1" align="center" cellpadding="10">
    <tr>
      <td>Sl No</td>
      <td>Name</td>
      <td>Contact</td>
      <td>Email</td>
      <td>Password</td>
      <td>Action</td>
    </tr>
    <?php
	$s=0;
	$selQry= "select * from tbl_admin";
	$data= mysql_query($selQry);
	while($row=mysql_fetch_array($data))
	  {
		  $s++;
		  ?>
          
    
    <tr>
      <td><?php echo $s ?></td>
      <td><?php echo $row["admin_name"]?></td>
      <td><?php echo $row["admin_contact"]?></td>
      <td><?php echo $row["admin_email"]?></td>
      <td><?php echo $row["admin_password"]?></td>
      <td><a href="AdminRegistration.php?did=<?php echo $row["admin_id"]?>">delete</a></td>
    </tr>
    <?php
	  }
	  ?>
      </table>