<?php
session_start(); 
if(empty($_SESSION['admin'])){
    
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/header.php');
 ?>
<a href="#" ><i class="fas fa-arrow-circle-up scrollup"></i></a>
 <!-- ------------main----------- CURDATE() -->
 <?php
//  ------------------WORK (start)-------------------
 include('connection.php');
 if (isset($_POST['author']) && isset($_POST['message'])){
    $author = $_POST['author'];
    $message = $_POST['message'];
    $sql1 = mysql_query("INSERT INTO FeedBack (name, text, data, DataAdd) VALUES ('$author','$message',CURDATE(),CURRENT_TIMESTAMP)");
    if ($sql1 == true){
        echo '<meta http-equiv="refresh" content="0; url=action.php">';
    }else{
        echo "Информация не занесена в базу данных";
    }
}
//  ------------------WORK (end)-------------------         
?>
 <div class="container otziv">
    <div class="row ">
        <div class="formOtz">
            <form method="post" name="form">
                <div class="form-group purple-border">
                    <p>Имя:<br><input name="author" type="text" id="author" class="form-control" autocomplete="off"></p>
                    <p>Отзыв:<br><textarea name="message" class="form-control" id="message" rows="5" cols="45" autocomplete="off"></textarea></p>
                    <p class="text-success tew" id="block">Отзыв успешно добавлен!</p>
                    <button type="submit" name="button" class="btn btn-primary btn-md" id="send">Отправить</button>
                </div>       
            </form>
        </div>     
    </div>
    <div class="row ">
    <?php
        // подключение к бд
        include('connection.php'); 
        // достаем все новости
        $sql2 = mysql_query("SELECT * FROM `FeedBack` ORDER BY `FeedBack`.`DataAdd` DESC") or die(mysql_error());    
        while($comments = mysql_fetch_array($sql2, MYSQL_ASSOC)){
            $id = $comments['id']; 
           echo '<div class="listOtz">';
           echo '<img src="templates/img/kritik.png" alt="">';
           echo '<p class="NameOtz">'.$comments['name'].'</p>';
           echo '<p class="TextOtz">'.$comments['text'].'</p>';
           echo '<span class="DateOtz">'.$comments['data'].'</span>';
           if(!empty($_SESSION['admin'])){
                echo '<a class="cross" href=delete.php?id='.$id.'><i class="far fa-trash-alt"></i></a>';
            }
           echo '</div>';
        }
    ?>
    </div>
 </div>
 <script>
        $(document).ready(function(){
            $('#send').click(function () {
            $("#block").removeClass('tew');
            });
        });
</script>
 <?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/footer.php');
 ?>
<script src="templates/js/preloader.js"></script>
</body>
</html>
