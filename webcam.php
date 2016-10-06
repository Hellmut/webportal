<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
    include('lock.php');
?>

<script language="javascript">
    function checkSession(){
        <?php
            include('check.php');
        ?>
    }
window.onload = function() {
    var image = document.getElementById("camimg");

    function updateImage() {
        image.src = image.src+ "?" + new Date().getTime() ;
    }

    setInterval(updateImage, 1000);
}
</script>

<?php
    if ($_GET['cam_refresh']) {
        $host        = "host=127.0.0.1";
        $port        = "port=5432";
        $dbname      = "dbname=rpidatabase";
        $credentials = "user=datauser";

        $db = pg_connect( "$host $dbname $credentials"  );
        if(!$db){
            echo "Error : Unable to open database\n";
        } else {
        }
       
        $sql ="INSERT INTO CAM_RCOMMAND DEFAULT VALUES;";

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
<title>WebPortal</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="page">
        <div id="sidebar">
            <?php
                include('sidebar.php')
            ?>
        </div>
        <div id="content">
            <div><img src="./images/banner.png" alt="" width="740" height="130" /></div>
            <div class="boxed">
                <h1 class="title2">Manual Control</h1>
                <a href="?cam_refresh=true">REFRESH!</a>
                <img src="./images/cimage.jpg" id="camimg" alt="Webcam Image">  
               <!-- <img src="jpeg.php?file=cimage.jpg" id="camimg" alt="Webcam Image"> -->
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <div style="clear: both;">&nbsp;</div>
  </div>
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
    <div id="footer">
        <?php
            include('footer.php');
        ?>
    </div>
</body>
</html>
