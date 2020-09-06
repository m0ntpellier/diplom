<?php
    $DBHost = "localhost";
    $DBUser = "u0692141_default";
    $DBPassword = "l_RhTm9v";
    $DBName = "u0692141_default";
    $link = mysql_connect($DBHost, $DBUser, $DBPassword);
    mysql_select_db($DBName, $link); 
    mysql_set_charset('utf8'); 
?>