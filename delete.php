<?php
include('connection.php'); 
$id = $_GET['id'];
$del = "DELETE FROM `CardFilm` WHERE id = '$id'";
$del1 = "DELETE FROM `FeedBack` WHERE id = '$id'";
$res=mysql_query($del) or die(mysql_error());
$res1=mysql_query($del1) or die(mysql_error());
header("Location: ".$_SERVER['HTTP_REFERER']);


