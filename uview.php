<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
	$oname=$_REQUEST['oname'];
	$hid=$_REQUEST['hid'];
	$qr=mysql_query("select * from hregist where oname='$oname' && id='$hid'");
    $rw=mysql_fetch_array($qr);
    $hid1=$rw['id'];
    $oname1=$rw['oname'];
	$amt=$rw['amnt'];
	

	if($_REQUEST["act"]==('add'))
	{
	
	$hhid=$_REQUEST['hid'];
	$qry=mysql_query("update hregist set status='1',uid='$uid' where id='$hhid'");
	echo "<script>alert('House Booked')</script>";
	
	
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
 
 
 
 <table width="100%" border="0" align="center">
<tr>
<td width="25%">&nbsp; </td>
<td width="21%">&nbsp; </td>
<td width="29%">&nbsp; </td>
<td width="25%">&nbsp; </td>
</tr>
 
 
 
 <?php

$qr=mysql_query("select * from hregist where oname='$oname' && id='$hid'");
$rw=mysql_fetch_array($qr);
$hid1=$rw['id'];
$oname1=$rw['oname'];
?>
<tr>
<td>&nbsp;</td>
<td align="center"><img src="images/<?php echo $rw['himg'];?>" width="200" height="200"></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Owner Name</strong></td>
<td align="left"><?php echo $rw['oname'];?></td>
<td>&nbsp;</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Location</strong></td>
<td align="left"><?php echo $rw['loc'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Address</strong></td>
<td align="left"><?php echo $rw['address'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Rent type<strong></td>
<td align="left"><?php echo $rw['rtype'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Amount</strong></td>
<td align="left"><?php echo $rw['amnt'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="justify"><strong>Number of rooms</strong></td>
<td align="left"><?php echo $rw['rms'];?></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><a href="uview.php?act=add&oname=<?php echo $rw['oname'];?>&hid=<?php echo $rw['id'];?>">Book</a></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td>&nbsp;</td>
</tr>

</table>
	 
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1"></p></td>
  </tr>
</table>
</body>
</html>

