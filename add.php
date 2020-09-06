<?php
if (isset($_POST['genre']) && isset($_POST['producer']) && isset($_POST['dateFrom'])&& isset($_POST['dateTo'])&& isset($_POST['description'])){

    // Переменные с формы
    $genre = $_POST['genre'];
    $producer = $_POST['producer'];
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];
    $desc = $_POST['description'];
    $img = $_POST['img'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "u0692141_default"; // Логин БД
    $db_password = "l_RhTm9v"; // Пароль БД
    $db_base = 'u0692141_default'; // Имя БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO 'CardFilm' (genre,producer,dateFrom,dateTo,description) VALUES ('$genre','$producer','$dateFrom','$dateTo','$desc')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>