<?php
// Простенький скрипт, для проверки работы связки PHP+MySQL.
// Скрипт выполняет подключение к серверу MySQL и, если успешно, то к базе данных.
// В значения переменных указываем свои данные!
$DBHost = "localhost";
$DBUser = "u0692141_default";
$DBPassword = "l_RhTm9v";
$DBName = "u0692141_default";
$link = mysql_connect($DBHost, $DBUser, $DBPassword);
mysql_select_db($DBName, $link); 
mysql_set_charset('utf8'); 
if (isset($_POST['fio']) && isset($_POST['question'])){
    $fio = $_POST['fio'];
    $question = $_POST['question'];
    $sql = mysql_query("INSERT INTO MyTab (im, tel) VALUES ('$fio','$question')");
    if ($sql == true){
        echo 'Информация занесена в базу данных';
    }else{
        echo "Информация не занесена в базу данных";
    }
}
?>
<form method="post" name="form">
        <p>Имя:<br><input  name="fio" type="text" id="fio"></p>
        <p>Отзыв:<br><textarea name="question" id="question" rows="5" cols="45"></textarea></p>
        <button type="submit" name="button" class="btn btn-primary btn-md" id="send">Отправить</button>  
</form>