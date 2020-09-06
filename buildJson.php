<?php
    $file = "data.json"; 
    $fh = fopen($file, 'a');
    $new_data = $_POST["newMesto"];
    fwrite($fh, $new_data."\r\n");
    fclose($fh);
?>