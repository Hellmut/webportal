<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Travel Portal
Version    : 1.0
Released   : 20070618
Description: A two-column, fixed-width template.

-->

<?php

include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from form 

    $myusername=$db->escapeString($_POST['username']); 
    $mypassword=$db->escapeString($_POST['password']); 

    $sql = "SELECT COUNT(id) FROM users WHERE username=:username AND passcode=:password";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username',$myusername, SQLITE3_TEXT);
    $stmt->bindValue(':password',$mypassword, SQLITE3_TEXT);

    $result = $stmt->execute();
    $row = $result->fetchArray(SQLITE3_ASSOC);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($row['COUNT(id)']==1)
    {
        $_SESSION['login_user']=$myusername;
        header("location: welcome.php");
    }
    else 
    {
	//Sleep - prevent brute force
	sleep(5);	
    }
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Travel Portal by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="form-frame">
<form class="form-container" action="" method="post">
<div class="form-title"><h2>Sign up</h2></div>
<div class="form-title">User Name</div>
<input class="form-field" type="text" name="username" /><br />
<div class="form-title">Password</div>
<input class="form-field" type="password" name="password" /><br />
<div class="submit-container">
<input class="submit-button" type="submit" value="Submit" />
</div>
</div>
</form>
</body>
</html>
