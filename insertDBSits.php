<?php
if(isset($_GET['name']) and isset($_GET['seans'])and isset($_GET['filmTime'])and isset($_GET['mas'])){
    $nameF = $_GET['name'];
    $seans = $_GET['seans'];
    $filmTime = $_GET['filmTime'];
    $mas = $_GET['mas'];
    $masPr = $_GET['masPr'];
    $nameBuy = $_GET['nameBuy'];
    $emailBuy = $_GET['emailBuy'];
    include('connection.php');
    $result = mysql_query("INSERT INTO TotalTickets (filmName, place, price, date, timeBegin, name, email) VALUES ('$nameF','$mas','$masPr','$seans','$filmTime','$nameBuy','$emailBuy')");
    // if ($result == true){
    //     echo 'yes';
    // }else{
    //     echo "Информация не занесена в базу данных";
    // }
    // echo($mas);
}
?>