<!DOCTYPE html>
<html lang="ru">
<head>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/header.php');
 ?>
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
<div class="container">
        <p class="wow fadeInLeft slow" id="photos" >Фотографии за последний месяц</p>
            <div class="fotorama wow fadeInDown data-fit="scaledown" data-nav="thumbs" data-autoplay="5000" data-width="100%" data-height="80%"  data-navposition="top">
                <?php
                // подключение к бд
                include('connection.php'); 
                $sql = mysql_query("SELECT * FROM `Gallery`") or die(mysql_error());    
                while($photo = mysql_fetch_array($sql, MYSQL_ASSOC)){
                $id = $photo['id'];
                echo '<img src="templates/img/'.$photo['name'].'">';
                }
                ?>
            </div>          
</div>
<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/footer.php');
 ?>
    <script src="templates/js/preloader.js"></script>
</body>
</html>