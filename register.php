<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{

$qry=mysql_query("insert into register(name,gender,age,email,phone,address,uname,psw) values('$name','$gender','$age','$email','$phone','$address','$uname','$psw')");
	if($qry)
	{

	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
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
.style2 {font-size: 18px; font-weight: bold; color: #ffffff; }
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

<br />
<br />
<br />
	 <form id="f1" name="f1" method="post" action="#">
  <table width="35%" border="0" align="center">
	
    <tr>
     
          <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
    
    </tr>
	
    <tr>
     
      <td width="30%">Name</td>
      <td width="70%"><input name="name" type="text" id="name" required/>
      </td>
      
    </tr>
	
    <tr>
     
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male"  required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
     
    </tr>
	
    <tr>
     
      <td>Age</td>
      <td>
        <input name="age" type="text" id="age" required />
      </td>
     
    </tr>
	
	
	
    <tr>
     
      <td>Email Id</td>
      <td><input name="email" type="email" id="email"required /></td>
      
    </tr>
	
	
	  <tr>
      <td>Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" required /></td>
      
    </tr>
	
	
	   <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"></textarea></td>
       </tr>
	
		
    <tr>
      <td>User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
    </tr>
	
    <tr>
     <td>Passwrod</td>
      <td><input name="psw" type="password" id="psw" /></td>
    </tr>
	
	
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>




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
