<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Blue Micro by Bryant Smith</title>
</head>

<body>
    <div id="page">
    	        <div id="header">
                	<img src="logo.png" alt="XHTML Template by Bryant Smith" />
                    <!-- Include an <h1></h1> tag with your site's title here, or make a transparent PNG like the one I used -->
                </div>
    
                </div>

                <div id="content">
                	<div id="container">

                        <div id="main">
                        <div id="menu">
                            <ul>
	                            <li><a href="#">Contact</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Home</a></li>
                            </ul>
                        </div>
                        <div id="text">
                       		<form method="post" action="index.php?w=0">
                            <input type="submit" value="Index">
                            </form>
                            <form method="post" action="schedule.php?w=0">
                            <input type="submit" value="Schedule">
                            </form>
                            <form method="post" action="pull.php">
                            <input type="submit" value="Pull">
                            </form>

                            <p>
                            <form method="post" action="index.php?w=1">
                            <input type="text" name="Target">
                            <input type="submit" value="Submit">
                            </p>
                            </form>
                                                    
                        </div>

                        </div>
                </div>
                <div class="clear"></div>
                <div id="footer">
                	<p><a href="http://www.bryantsmith.com/template">free xhtml template</a> by <a href="http://www.bryantsmith.com">web page designer</a></p>
                </div>
                
                
     </div>
        
<?php
    if ($_GET['w']){
        $var=true;
        echo $var;
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