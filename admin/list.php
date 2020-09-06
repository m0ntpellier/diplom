<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/headeradm.php');
?>

    <div class="listPremier">
        <table class="table table-striped table-dark table-hover table-bordered">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Название</th>
                    <th colspan="2">Действие</th>
                </tr>                
            </thead>
            <tbody>
            <?php
                // подключение к бд
                include('../connection.php'); 
                // достаем все новости
                $sql2 = mysql_query("SELECT * FROM `CardFilm`") or die(mysql_error());
                $i=1;  
                while($films = mysql_fetch_array($sql2, MYSQL_ASSOC)){ 
                    $id = $films['id'];                    
                    echo '<tr>';
                    echo '<td>'.$i++.'</td>';
                    echo '<td>'.$films['name'].'</td>';
                    echo '<td><a style="color:white; font-size:21px;" href=delete.php?id='.$id.'>Удалить</a></td>';
                    // echo '<td><a href=rewrite.php?id='.$id.'>Изменить</a></td>';
                    echo '</tr>';
                }  
            ?>
            </tbody>
        </table>
    </div>

<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/footeradm.php');
?>