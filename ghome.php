<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$oname=$_SESSION['oname'];
	if(isset($_POST['btn']))
	{
	$max_qry = mysql_query("select max(id) from hregist");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysql_query("insert into hregist values('$id','$oname','$loc','$address','$zip','$htype','$noh','$rtype','$hfor','$rms','$amnt','$himg','$dur','0','$uid','$place','$date','$time')");
		if($qry)
		{
		echo"<script> alert('Registerd sucessfully')</script>";
		
		}
		else
		{
		echo "<script> alert('Enter the fields correctly')</script>";
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
 
 
 	 
	 <form id="f1" name="f1" method="post" action="#">
  <table width="40%" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><strong>House Registration</strong></td>
	</tr>
	<tr>
	<td colspan="2">&nbsp;</td>
	<td width="4%"></td>
    <tr>
      <td width="46%">&nbsp;</td>
      <td width="50%">&nbsp;</td>
    </tr>
    <tr>
      
      <td align="justify"><strong> <div align="left">Location</div></td>
      <td><select name="loc">
	  <option value="Trichy">Trichy</option>
	  <option value="Madurai">Madurai</option>
	  <option value="Chennai">Chennai</option>
	  <option value="Coimbatore">Coimbatore</option></select>      </td>
    </tr>
    <tr>
      <td align="justify">Place</td>
      <td><label>
        <input name="place" type="text" id="place">
      </label></td>
    </tr>
    <tr>
     
      <td align="justify"><strong>
      <div align="left">Address</div></td>
      <td><label>
		<textarea name="address" id="address">
      </textarea></label></td>
    </tr>
	  <tr>
      
      <td align="justify"><strong> <div align="left">Zip</div></td>
      <td><input name="zip" type="text" id="zip" />      </td>
    </tr>
	   <tr>
      
      <td align="justify"><strong>
        <div align="left">House Type</div></td>
      <td><select name="htype" >
	  	  <option value="">select</option>
	  <option value="Apartment" >Apartment </option>
	  <option value="Indvidual Villa" >Induvidial Villa </option></select>	  </td>
    </tr>
	 <tr>
      <td align="justify"><strong> <div align="left">No of House</div></td>
      <td><input name="noh" type="text" id="noh" />      </td>
    </tr>
    <tr>
      <td align="justify"><strong>
      <div align="left">Rent Type</div></td>
      <td><select name="rtype">
	  	  <option value="">select</option>
	  <option value="Lease"> Lease </option>
	  <option value="rent"> Rent </option></select></td>
    </tr>
	 <tr>
      <td align="justify"><strong>
       <div align="left">Duration</div></td>
      <td><input name="dur" type="text" id="dur"  /></td>
    </tr>
	  <tr>
       <td align="justify"><strong>
        <div align="left">House For</div></td>
      <td><select name= 'hfor'>
	  <option value="">select</option>
	  <option value="Family">Family</option>
	  <option value="Bachelors">Bachelors</option>
	  <option value="Paying guest">paying guest</option>
	   <option value="all">For All</option></select>	  </td>
    </tr>
    <tr>
      <td align="justify"><strong>
      <div align="left">Number of Rooms</div></td>
      <td><input name="rms" type="text" id="rms" /></td>
    </tr>
	<tr>
      <td align="justify"><strong>
      <div align="left">Amount</div></td>
      <td><input name="amnt" type="text" id="amnt" /></td>
    </tr>
	<tr>
      <td align="justify"><strong>
      <div align="left">House Image</div></td>
      <td><input name="himg" type="file" id="himg" /></td>
    </tr>
    <tr>
      <td> <div align="left">Date </div></td>
      <td><label>
        <input name="date" type="date" id="date">
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Time</div></td>
      <td><label>
        <input name="time" type="time" id="time">
      </label></td>
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
