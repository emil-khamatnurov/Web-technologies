<?php
    $fh = fopen("reviews.json", 'w') or die("can't open file");
    $stringData = $_GET["data"];
    fwrite($fh, $stringData);
    fclose($fh);
?>