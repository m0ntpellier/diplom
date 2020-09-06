<?php
$bs = $_GET['bs']; 
include('connection.php'); 
// подключаем базу и делаем запрос
$result1 = mysql_query("SELECT place, timeBegin, filmName FROM TotalTickets WHERE timeBegin = '".$bs."'");
$result = [];
while ($values = mysql_fetch_assoc($result1)) {
    $result[] = $values;
}
echo json_encode($result);
// echo json_encode($values); 
//  print_r($row);
?>