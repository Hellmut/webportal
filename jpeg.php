<?php
    include('lock.php');

    $file = basename(urldecode($_GET['file']));
    $fileDir = '/srv/http/images/';

    if (file_exists($fileDir . $file))
    {
        $contents = file_get_contents($fileDir . $file);
        header('Content-type: image/jpeg');

        echo $contents;
    }

?>
