<?php
    include('lock.php');

    $file = 'cimage.jpg';
    $fileDir = '../resources/images/';

    if (file_exists($fileDir . $file))
    {
        $contents = file_get_contents($fileDir . $file);
        header('Content-type: image/jpeg');

        echo $contents;
    }

?>
