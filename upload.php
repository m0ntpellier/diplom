<?php
include('connection.php');
$uploadname=basename($_FILES['file']['name']);//записываем имя файла
$uploadpath='templates/img/'.$uploadname; //указываем куда грузить файл
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath)) { //перемещение загруженного файла из временной папки сервера в папку, которую указали (uploadpath)
    $upload="INSERT INTO CardFilm (image, path) VALUES ('$uploadname','$uploadpath')"; //составляем запрос на запись в базу имя и путь к файлу
    mysql_query($upload); //делаем запрос
    // header( 'Refresh: 0; url=/admin.php' ); 
}
?>