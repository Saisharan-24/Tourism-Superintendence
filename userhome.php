<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $uid=$_SESSION['uid'];
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
 
<form actio="#" method="post">
	<table width="100%" border="0" align="center">
  <tr>
		<td colspan="6">&nbsp;</td>
		</tr>

		<tr>
		<td>&nbsp;</td>
		<td align="center">Select location </td>
		<td align="center">
		</td>
		<td align="center"> 
		  <table width="100%" border="0">
            <tr>
              <td width="8%">Select City </td>
              <td width="8%"><select name="loc">
		  <option value="">Select</option>
	  <option value="Trichy">Trichy</option>
	  <option value="Madurai">Madurai</option>
	  <option value="Chennai">Chennai</option>
	  <option value="Coimbatore">Coimbatore</option></select>&nbsp;</td>
              <td width="8%">Select Place</td>
              <td width="8%"><select name="place" id="place">
                <?php
			  $qs=mysql_query("select * from hregist");
			  while($r=mysql_fetch_array($qs))
			  {
			  ?>
                <option value="<?php echo $r['place'];?>"><?php echo $r['place'];?></option>
                <?php
				}
				?>
              </select></td>
              <td width="8%"><label>
              Price:</label></td>
              <td width="13%"><label>
                <input name="price" type="text" id="price">
              </label></td>
              <td width="54%"><input type="submit" name="btn"></td>
              <td width="1%">&nbsp;</td>
            </tr>
          </table></td>
		
		</tr>
		
		<tr>
		<td colspan="6">&nbsp;</td>
		</tr>
		
		
		</form>
		<tr>
			<td>&nbsp;</td>
			 <td><div align="center" class="style6"><strong>Owner</strong> </div></td>
			  <td><div align="center" class="style6"><strong>Location</strong> </div></td>
			  <td><div align="center" class="style6"><strong>Address</strong> </div></td>
			  <td><div align="center" class="style6"><strong>House Type</strong></div></td>
			  <td><div align="center" class="style6"><strong>Only For</strong></div></td>
			  <td><div align="center" class="style6"><strong>Rent Type</strong></div></td>
			  <td><div align="center" class="style6"><strong>View Details</strong></div></td>
			  </tr>
			
	
	<tr>
	<td colspan="7">&nbsp;</td>
	</tr>
	
	<?php
	
			
	
		$qry=mysql_query("select * from hregist where loc='$loc' &&  status='0' && place='$place' && amnt<='$price'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
				
		?>

        <tr>
		<td>&nbsp;</td>
		 <td><div align="center"><?php echo $row['oname'];?></div></td>
		   <td><div align="center"><?php echo $row['loc'];?></div></td>
		   <td><div align="center"><?php echo $row['address'];?></div></td>
		   <td><div align="center"><?php echo $row['htype'];?></div></td>
		   <td><div align="center"><?php echo $row['hfor'];?></div></td>
		    <td><div align="center"><?php echo $row['rtype']; ;?></div></td>
		  <td><div align="center"><a href="uview.php?oname=<?php echo $row['oname'];?>&hid=<?php echo $row['id'];?>">House Details</a></div></td>
		  		 
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
		</table>
	
	
	
	
	 
<table width="95%" border="1" align="center" bordercolor="#001a33">
  <tr>
    <td height="80" valign="center" bgcolor="#001a33" align="center"><p class="style1"></p></td>
  </tr>
</table>
</body>
</html>
