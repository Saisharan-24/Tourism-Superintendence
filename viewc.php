<?php
session_start();
include("dbconnect.php");
extract($_POST);
echo $oname=$_SESSION['oname'];

if($_REQUEST["act"]==('add'))
{

$hid=$_REQUEST['hid'];
$qt=mysql_query("update hregist set status='0' where hid='$hid'");
echo"Status Cleared";

}

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
    <td width="19%" height="34" bgcolor="#FF8C00"><div align="center"><strong><a href="ghome.php">House Owner Home</a></strong></div></td>
    <td width="20%" bgcolor="#FF8C00"><div align="center"><strong><a href="viewr.php">View Request</a></strong></div></td>
    <td width="19%" bgcolor="#FF8C00"><div align="center"><strong><a href="viewc.php">View Clients</a></strong></div></td>
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
		   <td width="12%"><div align="center" class="style6"><strong>House Location</strong> </div></td>
		    <td width="13%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			 <td width="17%"><div align="center" class="style6"><strong>Rent Type</strong> </div></td>
			  <td width="17%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
			   <td width="17%"><div align="center" class="style6"><strong>Gender</strong> </div></td>
			   <td width="17%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			   <td width="17%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from hregist where oname='$oname' && status='2'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$uid=$row['uid'];
		$qry1=mysql_query("select * from register where id='$uid'");
		$row1=mysql_fetch_array($qry1);
		$status=$row['status'];	
		?>
        <tr>
		 <td width="5%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		    <td><div align="center"><?php echo $row['loc'];?></div></td>
			 <td><div align="center"><?php echo $row['address'];?></div></td>
			   <td><div align="center"><?php echo $row['rtype'];?></div></td>
			    <td><div align="center"><?php echo $row1['name'];?></div></td>
				 <td><div align="center"><?php echo $row1['gender'];?></div></td>
				  <td><div align="center"><?php echo $row1['email'];?></div></td>
				   <td><div align="center"><?php echo $row1['phone'];?></div></td>
			    <td><div align="center"><a href="viewc.php?act=del&hid=<?php echo $row['id'];?>">Cancel User</a></div></td>
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





 
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1"></p></td>
  </tr>
</table>
</body>
</html>

