<?php
session_start(); 
if(empty($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/ControlPanel.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="../templates/css/admin.css">
    <link rel="stylesheet" href="../templates/css/datepicker.css">      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Панель управления</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../templates/js/bootstrap-datepicker.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <nav class="header">
        <p>Панель администратора</p>
        <a href="logout.php">Выйти из панели управления</a>
    </nav>
    <div class="sidebar">
        <ul> 
            <li><a href="premier.php"><span class="fas fa-plus"></span>Премьера</a></li>
            <li><a href="list.php"><span class="fas fa-percentage"></span>Список премьер</a></li>
            <li><a href="schedule.php"><span class="fas fa-clock"></span>Расписание</a></li>
            <li><a href="customers.php"><span class="fas fa-ruble-sign"></span>Покупатели</a></li>
        </ul>
    </div>
    <a class="btnGamb"></a>
