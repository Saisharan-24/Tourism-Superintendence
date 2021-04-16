<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
    <td width="19%" height="34" bgcolor="#FF8C00"><div align="center"><strong><a href="adminhome.php">Home</a></strong></div></td>
    <td width="20%" bgcolor="#FF8C00"><div align="center"><strong><a href="viewg.php">View Owner </a></strong></div></td>
    <td width="15%" bgcolor="#FF8C00"><div align="center"><strong><a href="viewh.php">View Houses</a></strong></div></td>
    <td width="27%" bgcolor="#FF8C00"><div align="center"><strong><a href="index.php">LogOut</a></strong></div></td>
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
  
  
  
  
  <table width="98%" align="center">

<tr>
		<td colspan="10" align="center"><strong>User Details</strong></td>
  </tr>

	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Gender</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Age</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			   <td width="10%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			     <td width="10%"><div align="center" class="style6"><strong>Address</strong> </div></td>
				  </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from register");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['gender'];?></div></td>
			   <td><div align="center"><?php echo $row['age'];?></div></td>
				 <td><div align="center"><?php echo $row['email'];?></div></td>
				  <td><div align="center"><?php echo $row['phone'];?></div></td>
				   <td><div align="center"><?php echo $row['address'];?></div></td>

		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
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
