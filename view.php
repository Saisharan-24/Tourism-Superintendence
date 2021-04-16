<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['uid'];
?>

<html>
<title>House Rent</title>
<head>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #ffffff;
}
.style2 {font-size: 18px; font-weight: bold; color: #000000; }
a
{
text-decoration:none;
color:#000000;
}
.style3 {font-size: 18px}

-->
</style>
</head>

<body>
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="144" valign="top" bgcolor="#001a33" align="center"><p class="style1">House Rental Management System</p>
      
    <p align="center" class="style2">&nbsp;</p></td>
  </tr>
</table>
<table width="95%" border="0" align="center" bordercolor="#1a0000">
  <tr>
    <td width="19%" height="34" bgcolor="#FF8C00"><div align="center"><strong><a href="userhome.php">User Home</a></strong></div></td>
    <td width="20%" bgcolor="#FF8C00"><div align="center"><strong><a href="view.php">View Details</a></strong></div></td>
    <td width="27%" bgcolor="#FF8C00"><div align="center"><strong><a href="index.php">LogOut</a></strong></div></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <table width="95%" border="0" align="center">
    <tr>
      <td align="center"><p><strong>House Rental</strong>:</p>
        <table width="90%" border="0" align="center">
          <tr>
            <td>&nbsp;&nbsp;
           <img src="images\1.jpg" width="1340" height="200"/>
          </tr>
        </table>
      <p>&nbsp; </p></td>
    </tr>
  </table>
 

<table width="100%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
	
	
		<tr>
		<td colspan="10" align="center">House Booking Details</td>
	  </tr>
		
		<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
	
		    <tr>
          <td width="5%">&nbsp;</td>
          <td width="14%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="10%"><div align="center" class="style6"><strong>Owner Name</strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong>House Location</strong> </div></td>
		    <td width="13%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			 <td width="17%"><div align="center" class="style6"><strong>Rent Type</strong> </div></td>
			  <td width="17%"><div align="center" class="style6"><strong>Status</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from hregist where uid='$uid'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$hid=$row['id'];
		$status=$row['status'];	
		?>
        <tr>
		 <td width="5%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['oname'];?></div></td>
		    <td><div align="center"><?php echo $row['loc'];?></div></td>
			 <td><div align="center"><?php echo $row['address'];?></div></td>
			   <td><div align="center"><?php echo $row['rtype'];?></div></td>
			    <td><div align="center"><?php if($status==1)
				 {
				 
				 
				 echo "Your Request Sent To the Owner";
				 
				 }
				 else if($status==2)
				 {
				 echo '<a href=payment.php?id='.$hid.'&amt='.$row['amnt'].'>Payment</a>';
				 
				 }  
				 else
				 {
				 
				 
				 echo "Owner Accept Your Request";
				 
				 
				 }
				 
				 
				 ?>
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="17%">&nbsp;</td>
		
		
		</tr>
		
		
			
		<?php
		
		}
		
		?>
		
		
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>


<br />
<br />
<br />



	 
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1"></p></td>
  </tr>
</table>
</body>
</html>

