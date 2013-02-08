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
    <a href="index.html">home</a> 
    <a href="about.html">about</a> 
    <a href="staff.html">staff</a> 
    <a href="services.html">services</a> 
    <a href="testimonial.html">testimonial</a> 
    <a href="aboutUs.html">knowUs</a> </div>
  </div>
  <div class="content">
<div align="center"></div>
<div align="center">
  <?php
session_start();
unset($_SESSION['fname']);
header("Location: http://dentalclinicsample.site11.com/index.html");
echo "You have sucessfully logged out please <a href='index.html'>Click here</a>";
?>
</div>
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
