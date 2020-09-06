<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/headeradm.php');
 ?>

<div class="container">
    <div class="row">
        <div class="premier">      
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="card mb-3">
                        <div class="card-header">Добавить премьеру<a href="https://www.kinopoisk.ru/" target="_blank"><img class="kinopoisk" src="../templates/img/kinopoisk.png" alt="Кинопоиск"></a></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <?php
                                        if (isset($_POST['sendBtn'])) {
                                                $allowed =  array('gif','png' ,'jpg');
                                                $file = $_FILES['file']['name'];
                                                $ext = pathinfo($file, PATHINFO_EXTENSION);
                                                    if(!in_array($ext,$allowed) ) 
                                                        { 
                                                    echo '<script>
                                                            alert("Данный тип файла не поддерживается!");
                                                            window.location.href="premier.php";
                                                        </script>';
                                                        exit(0);
                                                        }
                                            if (isset($_POST['genre']) && isset($_POST['producer']) && isset($_POST['dateFrom']) && isset($_POST['dateTo']) && isset($_POST['description']) && isset ($_FILES['file'])){
                                                // Переменные с формы
                                                $name = $_POST['name'];
                                                $genre = $_POST['genre'];
                                                $producer = $_POST['producer'];
                                                $dateFrom = $_POST['dateFrom'];
                                                $dateTo = $_POST['dateTo'];
                                                $desc = $_POST['description'];
                                                $uploadname=basename($_FILES['file']['name']);//Имя файла
                                                $uploadpath='../templates/img/'.$uploadname; //путь загрузки                                             
                                                // Параметры для подключения
                                                $db_host = "localhost"; 
                                                $db_user = "u0692141_default"; // Логин БД
                                                $db_password = "l_RhTm9v"; // Пароль БД
                                                $db_base = 'u0692141_default'; // Имя БД
                                                // Подключение к БД
                                                $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
                                                mysqli_set_charset($mysqli, 'utf8');
                                                // Если есть ошибка соединения, выводим её и убиваем подключение
                                                if ($mysqli->connect_error) {
                                                    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
                                                }  
                                                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath)){                                           
                                                $result = $mysqli->query("INSERT INTO CardFilm (name, genre, producer, dateFrom, dateTo, description, image, path) VALUES ('$name','$genre','$producer','$dateFrom','$dateTo','$desc','$uploadname','$uploadpath')");
                                                if ($result == true){
                                                    echo '<meta http-equiv="refresh" content="0; url=premier.php">';
                                                }else{
                                                    echo "Информация не занесена в базу данных";
                                                }
                                                }                                                  
                                            }                                                                                           
                                        }
                                    ?>
                                        <form method="post" enctype = 'multipart/form-data'>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Введите название фильма" type="text" id="name" name="name" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Введите жанр" type="text" id="genre" name="genre" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Введите режиссера" type="text" id="producer" name="producer" autocomplete="off">
                                            </div>
                                            <div class="form-group datePr">
                                                <input class="form-control" placeholder="С" type="text" id="dateFrom" name="dateFrom" autocomplete="off">
                                                <input class="form-control" placeholder="до" type="text" id="dateTo" name="dateTo" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Описание" rows="4" id="description" name="description" autocomplete="off"></textarea>
                                            </div>
                                            <div class="form-group imgC">
                                                <div class="example-2">
                                                    <div class="form-group">
                                                        <input type="file" name="file" id="file" class="input-file form-control">
                                                        <label for="file" class="btn btn-tertiary js-labelFile">
                                                        <i class="icon fa fa-check"></i>
                                                        <span class="js-fileName">Загрузить обложку</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-success tew" id="block">Премьера успешно добавлена!</p>
                                            <div class="buttons">
                                                    <button type="submit" name="sendBtn" class="btn btn-primary " id="send">Добавить</button>
                                                    <button type="submit" name="clearBtn" class="btn btn-primary " id="clear">Очистить</button>
                                            </div>                          
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/footeradm.php');
 ?>