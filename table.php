<?php
$eml = $_GET['email'];
include('connection.php'); 
$sql1 = mysql_query("SELECT * FROM TotalTickets where email='$eml'") or die(mysql_error());
$result = [];
while ($values = mysql_fetch_assoc($sql1)) {
    $result[] = $values;
}
echo json_encode($result); 
?>