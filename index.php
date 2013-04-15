 <!--
Design by Bryant Smith
http://www.bryantsmith.com
http://www.aszx.net
email: templates [-at-] bryantsmith [-dot-] com
Released under Creative Commons Attribution 2.5 Generic.  In other words, do with it what you please; but please leave the link if you'd be so kind :)

Name       : A Farewell to Colors
Description: One column, with top naviagation
Version    : 1.0
Released   : 20081230
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>A Farewell to Colors by Bryant Smith</title>
</head>

<body>
    <div id="page">
		
        <div id="header">
        	<h1>Thermostat</h1>
            <h2>Control you HVAC with RaspberryPi</h2>
            
      </div>
  <div id="bar">
        	<div class="link"><a href="index.php?w=0">Index</a></div>
            <div class="link"><a href="schedule.php?w=0">Schedule</a></div>
            <div class="link"><a href="pull.php">Pull</a></div>
            
      </div>
        <div align="center" class="contentTitle"><h1>Manual Settings</h1></div>
        
        <div class="contentText">
          <hr>
          <br>
          <br>
          <h2>HVAC</h2>
          <hr>
          <input type="radio" name="HVAC" value="heat"> Heater<br>
          <input type="radio" name="HVAC" value="ac" checked> AC<br>
          <h2>Fan</h2>
          <hr>
          <input type="radio" name="fan" value="on"> On<br>
          <input type="radio" name="fan" value="auto" checked> Auto<br>
          <h2>Temperature</h2>
          <hr>
          <form method="post" action="index.php?w=1">
          <input type="text" name="Target">
          <input type="submit" value="Submit">
          </p>
          </form>
  </div>        
</div>
        <div id="footer"></div>
  <?php
    if ($_GET['w']){
        include("login.php");
        $dbhandle=mysql_connect(localhost,$un,$pw) or die("Unable to connect!");      
        $selected=mysql_select_db($db) or die("Unable to select!");

        #Set manual overrides
        $target = mysql_real_escape_string($_POST["Target"]);
        $query = "UPDATE User_Req SET Temp=$target";
        $result=mysql_query($query);
    }
  ?>
</body>
</html>
