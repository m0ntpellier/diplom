<?php
    $nameF = $_GET['name'];
    $seans = $_GET['seans'];
    $filmTime = $_GET['filmTime'];
    $sum = $_GET['sum'];
    $nameBuy = $_GET['nameBuy'];
    $emailBuy = $_GET['emailBuy'];
    $StringArr=$_GET['StringArr'];
    $to = $emailBuy; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Ваш Заказ'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$nameBuy.'</p>
                        <p>Название фильма: '.$nameF.'</p>
                        <p>Дата фильма: '.$seans.'</p>
                        <p>Места: '.$StringArr.'</p>
                        <p>Начало фильма: '.$filmTime.'</p>

                        <p>Сумма: '.$sum.'</p>                       
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Кинотеатр 'Аврора' <avrora@gmail.ru>\r\n"; //Наименование и почта отправителя   
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>