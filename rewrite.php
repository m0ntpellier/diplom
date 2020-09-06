<?php
include('connection.php'); 
$id = $_GET['id'];
$rew = "SELECT * FROM `CardFilm` WHERE id='$id'";
$fm = mysqli_fetch_array($rew, MYSQL_ASSOC);
?>