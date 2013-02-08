<?php
session_start();
$na=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];
if ($na == NULL )
{
header("Location: login.html");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dentalSiteSample</title>
<link href="basicStyle.css" rel="stylesheet" type="text/css" />
<link href="navBar.css" rel="stylesheet" type="text/css" />
<link href="bottomNavBar.css" rel="stylesheet" type="text/css" />
<link href="homeSpecials" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#333333">
<div class="mains">
  <div class="mainLogo"> <strong>C h a n d g u d e &nbsp;&nbsp;&nbsp; D e n t a l &nbsp;&nbsp;&nbsp; C l i n i c</strong> <br />
    <font size="4px">Ganapur road, Nahsik [ Tel : +917709938617 ]</font> <br />
  </div>
  <div class="navBarBackground">
    <div class="navBar"> 
    <a href="index.php">home</a> 
    <a href="about.html">about</a> 
    <a href="staff.html">staff</a> 
    <a href="services.html">services</a> 
    <a href="testimonial.html">testimonial</a> 
    <a href="aboutUs.html">knowUs</a> </div>
  </div>
  <div class="content">
    <table class="mainTable" width="100%" border="0" cellpadding="5">
      <tr>
        <td width="30%"><p>&nbsp;</p>
          <div class="quickAppoint">
            <form action="login.php">
              <div align="center">
                <table width="99%" height="108" border="0">
                  <tr>
                    <td colspan="2"><div align="right"><strong><a href="logout.php">Logout</a></strong></div></td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                    
  <?php                  
                    
                    
$con = mysql_connect(
  $server = 'mysql13.000webhost.com',
  $username = 'a2617954_dentalC',
  $password = 'rootkags123');
mysql_select_db('a2617954_dentalC');
$result = mysql_query("SELECT * FROM `bulkEntry;");

echo "<center><table width='560px'><tr><td><strong>Patient name</strong></td><td><strong>Contact no.</strong></td><td><strong>Appointment Details</strong></td><td><strong>Delete</strong></td></tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>";
  $name=$row['name'];
  echo $name;
  echo "</td><td>";
  $contact=$row['contact'];
  echo $contact;
  echo "</td><td>";
  $detail=$row['dateTime'];
  echo $detail;
  echo "</td><td>";
  echo "<form action='delete.php' method='post'>";
  echo "<input type='hidden' name='name' value='$name' />";
  echo "<input type='hidden' name='contact' value='$contact' />";
  echo "<input type='hidden' name='detail' value='$detail' />";
  echo "<input type='submit' name='Submit' value='Delete' />";
  echo "</form>";
  echo "</td>";
  echo "</tr>";
  }

echo "</table></center>"; 

//db connection closing
mysql_close($con);

             ?>       
                    
                    
                    </div></td>
                  </tr>
                </table>
              </div>
              <div align="center"></div>
          </form></div>
        <p><strong></strong></p></td>
      </tr>
    </table>
  </div>
<div class="bottomNavbar">
  <table width="100%" height="149" border="0" cellpadding="5">
    <tr>
      <td width="30%">&nbsp;</td>
      <td width="40%">Designed and developed by<br />
        <img src="images/Ultimate-Solution.png" width="80" height="100" /></td>
      <td width="30%">&nbsp;</td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
