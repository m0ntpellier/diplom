<!DOCTYPE html>
<html lang="ru">
<head>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/header.php');
 ?>

<div class="container">
    <div class="row">
        <div class="bar">
            <p>В нашем буфете вы можете приобрести еду и напитки для просмотра кинофильма. 
                    Ниже представлено меню нашего буфета.</p>
            <div class="menuBar">
                <img src="templates/img/drinks.png" alt="Напитки">
                <img class="zakuski" src="templates/img/zakuski.png" alt="Напитки">
            </div>
        </div>       
    </div>
</div>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/footer.php');
 ?>
<script src="templates/js/preloader.js"></script>
</body>
</html>