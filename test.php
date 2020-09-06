<?php
$bs = $_GET['bs']; 
include('connection.php'); 
// подключаем базу и делаем запрос
$result = mysql_query("SELECT * FROM schedule WHERE begin1 = '".$bs."' or begin2='".$bs."' or begin3='".$bs."' or begin4='".$bs."'");
$values = mysql_fetch_assoc($result);
echo json_encode($values); 
?>