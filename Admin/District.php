<?php
	include('../Assets/Connection/connection.php');
	if(isset($_POST['save']))
	{
		$dist=$_POST['district'];
		
		$q= "insert into tbl_district(district_name)values('$dist')";
		mysql_query($q);
		
	}
	if($_GET['did'])
		{
		$did=$_GET['did'];
		$del="delete from tbl_district where district_id='$did'";
		mysql_query($del);
		}
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1">

  <tr>
    <td><div align="center">District</div></td>
    <td>
      <label for="district"></label>
      <input type="text" name="district" id="district" />
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
       <input type="submit" name="save" id="save" value="Save" />
       <input type="reset" name="submit" id="submit" value="Cancel" />
      </div>
   </td>
  </tr> 
 
</table>
<table width="200" border="1">
  <tr>
    <td>Sl.no</td>
    <td>District</td>
    <td>Action</td>
  </tr>
  
   <?php
    $i=0;
   	$dis="select *from tbl_district";
	$data=mysql_query($dis);
	while($row=mysql_fetch_array($data))
	{
		$i++;
	?>
		<tr>
    		<td><?php echo "$i" ?></td>
    		<td><?php echo $row["district_name"] ?> </td>
    		<td><a href="District.php?did=<?php echo $row["district_id"] ?> " >Delete</a></td>
  		</tr>
   <?php
	}
   ?>
  
</table>
 </form>
<!--h3 style="font-family:Arial, Helvetica, sans-serif">
<?php echo "$dist" ?></h3-->

</body>
</html>