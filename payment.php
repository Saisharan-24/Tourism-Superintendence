<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
	$amt=$_REQUEST['amt'];
	
$hid=$_REQUEST['id'];

if(isset($_POST['btn']))
{
$qry=mysql_query("update hregist set status=3 where id='$hid'");
header("location:userhome.php");
	
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
 
 
 
  <form name="form1" method="post" action="">
    <table width="50%" border="0" align="center">
      <tr>
        <td colspan="2"><span class="style1">Payment Mode.... </span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="image" name="imageField" src="images/payment.png" />
        </label></td>
      </tr>
      <tr>
        <td width="35%"><span class="style4">Amount</span> </td>
        <td><?php echo $amt;?></td>
      </tr>
      <tr>
        <td height="33"><span class="style4">Enter Card Number </span></td>
        <td><input name="cno" type="text" id="cno" /></td>
      </tr>
      <tr>
        <td height="36"><span class="style4">CVV Number </span></td>
        <td><input name="cvv" type="password" id="cvv" /></td>
      </tr>
      <tr>
        <td><span class="style4">Card Name </span></td>
        <td><input name="cname" type="text" id="cname" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input name="btn" type="submit" id="btn" value="Pay Amount">
        </label></td>
      </tr>
    </table>
    </form>
  <table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1"></p></td>
  </tr>
</table>

</body>
</html>

