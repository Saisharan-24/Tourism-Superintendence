<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
if($type=='Guest')
{
$qry=mysql_query("select * from gregister where email='$email'");
$num=mysql_num_rows($qry);
if($num>=1)
{
echo "<script>alert('Login Successfull');</script>";
header("location:reset.php?email=$email");
}
}
if($type=='User')
{
$qry=mysql_query("select * from register where email='$email'");
$num=mysql_num_rows($qry);
if($num>=1)
{
echo "<script>alert('Login Successfull');</script>";
header("location:reset1.php?email=$email");
}
}
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
    <td width="19%" height="34" bgcolor="#FF8C00"><div align="center"><strong><a href="index.php">Home</a></strong></div></td>
    <td width="20%" bgcolor="#FF8C00"><div align="center"><strong><a href="admin.php">Admin</a></strong></div></td>
    <td width="19%" bgcolor="#FF8C00"><div align="center"><strong><a href="guest.php">House Owner</a></strong></div></td>
    <td width="15%" bgcolor="#FF8C00"><div align="center"><strong><a href="user.php">User</a></strong></div></td>
    <td width="27%" bgcolor="#FF8C00"><div align="center"><strong><a href="forgot.php">Forgot Password</a></strong></div></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <table width="95%" border="0" align="center">
    <tr>
      <td align="center"><p><span class="style3"><strong>House Rental</strong>:</span></p>
        <table width="90%" border="0" align="center">
          <tr>
            <td>&nbsp;&nbsp;
           <img src="images\1.jpg" width="1340" height="200"/>
          </tr>
        </table>
      <p>&nbsp; </p></td>
    </tr>
  </table>
 
 
 	 <form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style2"><strong><font size="+1">Forgot Password</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>Select Type </strong></span></td>
           <td><label>
             <select name="type" required>
			 <option value="">Select</option>
			 <option value="Guest">House Owner</option>
			 <option value="User">User</option>
			 </select>
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Enter Your Email</strong></span></td>
           <td><label>
             <input name="email" type="email" id="email"  required/>
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
  </table>
</form>
   <br />
   <br />
   <br />
   <br />
    <br />
   <br />
   <br />
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