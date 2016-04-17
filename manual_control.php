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

include('lock.php');

?>

<script language="javascript">
function checkSession(){
<?php

include('check.php');

?>
}
</script>

<?php
if ($_GET['on']) {
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=rpidatabase";
   $credentials = "user=datauser";

   $db = pg_connect( "$host $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
   }
   
   $sql =<<<EOF
     INSERT INTO M_OUTLET_WCOMMAND (OUTLET_NR, OUTLET_STATE) VALUES (1, 1);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
   }
   pg_close($db);

}
if ($_GET['off']) { 

   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=rpidatabase";
   $credentials = "user=datauser";

   $db = pg_connect( "$host $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
   }

   $sql =<<<EOF
     INSERT INTO M_OUTLET_WCOMMAND (OUTLET_NR, OUTLET_STATE) VALUES (1, 0);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
   }
   pg_close($db);



}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Portal by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="#">Portal</a></h1>
    </div>
    <!-- end header -->
    <div id="menu">
      <ul>
        <li class="first"><a href="welcome.php">Home</a></li>
        <li><a href="#">Manual Control</a></li>
        <li><a href="webcam.php">Live Camera </a></li>
        <li><a href="#">Sheduler</a></li>
        <li><a href="#">Sensors</a></li>
        <li><a href="#">Measurement History </a></li>
        <li><a href="#">Settings </a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </div>
    <!-- end menu -->

  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="./images/img08.jpg" alt="" width="740" height="130" /></div>
    <div class="boxed">
      <h1 class="title2">Manual Control</h1>
      <a href="?on=true">TURN ON!</a>
      <a href="?off=true">TURN OFF!</a>      
    </div>
      <div style="clear: both;">&nbsp;</div>
    </div>
  </div>
  <!-- end content -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
  <p id="legal">Copyright &copy; 2007 Travel Portal. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
  <p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>