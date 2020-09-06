<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/headeradm.php');
?>
<?php
 if (isset($_POST['sendBtn'])) {
    include('../connection.php');
    if (isset($_POST['name']) && isset($_POST['data']) && isset($_POST['version_pledge']) && isset($_POST['TimeInput1']) && isset($_POST['TimeInput2']) && isset($_POST['TimeInput3']) && isset($_POST['TimeInput4'])){
       $name = $_POST['name'];
       $data = $_POST['data'];
       $hall = $_POST['version_pledge'];
       $TimeInput1 = $_POST['TimeInput1'];
       $TimeInput2 = $_POST['TimeInput2'];
       $TimeInput3 = $_POST['TimeInput3'];
       $TimeInput4 = $_POST['TimeInput4'];
       $sql = mysql_query("INSERT INTO schedule (name, seans, hall, begin1, begin2, begin3, begin4) VALUES ('$name','$data','$hall','$TimeInput1','$TimeInput2','$TimeInput3','$TimeInput4')");
       if ($sql == true){
           echo '<meta http-equiv="refresh" content="0; url=schedule.php">';
       }else{
           echo "Информация не занесена в базу данных";
       }
   }
 }
?>
<div class="container">
    <div class="card mb-3"  style="margin: auto; margin-top:30px;">
        <div class="card-header text-center">Добавить сеанс</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <form method="post" enctype = 'multipart/form-data' >
                                <div class="form-group">
                                    <input class="form-control" placeholder="Введите название фильма" type="text" id="name" name="name" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Выберите дату сеанса" type="text" id="data" name="data" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <div class="select_main">
                                        <p></p>
                                        <select name="version_pledge" id="calc_region_1">
                                            <option value="">Выберите зал</option>
                                            <option value="Малый">Малый</option>
                                            <option value="Большой">Большой</option>					
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group times">
                                    <input class="form-control begin" placeholder="Время №1" type="text" id="TimeInput1" name="TimeInput1" autocomplete="off">
                                    <input class="form-control begin" placeholder="Время №2" type="text" id="TimeInput2" name="TimeInput2" autocomplete="off">
                                    <input class="form-control begin" placeholder="Время №3" type="text" id="TimeInput3" name="TimeInput3" autocomplete="off">
                                    <input class="form-control begin" placeholder="Время №4" type="text" id="TimeInput4" name="TimeInput4" autocomplete="off">
                                </div>
                                <p class="text-success tew" id="block">Сеанс успешно добавлен!</p>
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
<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/footeradm.php');
?>