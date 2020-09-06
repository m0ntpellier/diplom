<?php
if(isset($_POST['arr']) and isset($_POST['name'])):
    $data = date("H:m:s");
    $nameF = $_POST['name'];
    $nameF = preg_replace('/\s+/','',$nameF);
    $reg=$nameF.$data;
$BoughtTicks = json_decode($_POST['arr']);
print_r($BoughtTicks);
$json = json_encode($BoughtTicks);
 setcookie ($reg, $json, time()+172800);
 print_r($_COOKIE[$reg]);
endif;
?>