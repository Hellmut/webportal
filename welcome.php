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
</script>

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
        <div id="sidebar"> <?php include('sidebar.php'); ?> </div>
        <div id="content">
            <div><img src="./images/banner.png" alt="" width="740" height="130" /></div>
            <div class="boxed">
                <h1 class="title2">Welcome to RPI website! </h1>
                <p><strong>Portal</strong> </p>
                <h3>Curabitur Sem Urna</h3>
                <p>Vel consequat, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdie:</p>
                <blockquote>
                     <p>&ldquo;In posuere eleifend odio ...&rdquo;</p>
                </blockquote>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <div style="clear: both;">&nbsp;</div>
    </div>
    <div style="clear: both;">&nbsp;</div>
    <div id="footer"> <?php include('footer.php'); ?> </div>
</body>
</html>
