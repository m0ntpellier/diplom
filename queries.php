<?php
$sql1 = mysql_query("INSERT INTO FeedBack (name, text, data) VALUES ('$author','$message',CURDATE())");
?>