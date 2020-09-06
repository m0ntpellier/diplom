<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/headeradm.php');
?>

<div class="container">
<!-- <div class="form-group">
    <div class="select_main">
        <p></p>
        <select name="version_pledge" id="calc_region_1">
            php
            include('../connection.php'); 
            $sql = mysql_query("SELECT * FROM `TotalTickets` GROUP BY email") or die(mysql_error());
            while($em = mysql_fetch_array($sql, MYSQL_ASSOC)){ 
    echo    '<option value="'.$em['email'].'">'.$em['email'].'</option>';	
            }
            php			
        </select>
    </div>
</div> -->

<table class="table email">
    <thead>
        <tr>
            <th>Название</th>
            <th>Дата</th>
            <th>Начало</th>
            <th>Цена</th>           
            <th>Емеил</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('../connection.php'); 
        $sql1 = mysql_query("SELECT * FROM `TotalTickets` order by email DESC") or die(mysql_error());   
        while($cust = mysql_fetch_array($sql1, MYSQL_ASSOC)){          	
    echo '<tr>
            <td>'.$cust['filmName'].'</td>
            <td>'.$cust['date'].'</td>
            <td>'.$cust['timeBegin'].'</td>
            <td>'.$cust['price'].'</td>
            <td>'.$cust['email'].'</td>
        </tr>';
        }
        ?>
    </tbody>     
</table>
</div>
<script src="../templates/js/test.js"></script>
<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/admin/footeradm.php');
?>