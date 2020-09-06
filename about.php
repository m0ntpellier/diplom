<!DOCTYPE html>
<html lang="ru">
<head>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/header.php');
 ?>
<!-- ---------------------map------------------------- -->
<div class="container ">
    <p  class="wow zoomInUp delay-0.6s" id="whereMapText">Как нас найти?</p>
    <div class="row maps ">
        <div class="textMap wow zoomIn col-lg-4">
            <p>Мы находимся по адресу: <br>ул.Янгеля, 111 А <br>23-й микрорайон, Центральный округ, Братск <br>Ежедневно 11:00–24:00 <br>Открытие в 11:00</p>
            <div class="phones">
                <p class="wow fadeIneft"><a href="tel:+7395235452">+7 (3953) 23-54-52</a><span class="pLess"><br>Автоинформатор</span></p>
                <hr>
                <p class="wow fadeInRight"><a href="tel:+73953351242">+7 (3953) 35–12–42</a><span class="pLess"><br>Касса</span></p>
                <hr>
                <p class="wow fadeInLeft"><a href="tel:+73953425372">+7 (3953) 42–53–72</a><span class="pLess"><br>Бронирование</span></p>
                <hr>
            </div> 
        </div>                
        <div class="wow text-center fadeInLeft col-sm-12 col-md-12 col-lg-12" id="map"></div>
    </div>
</div>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/footer.php');
 ?>
 <script>
 var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [56.1569154, 101.5941626],
            zoom: 17
        });
        DG.marker([56.1569154, 101.5941626]).addTo(map).bindPopup('Приходите и наслаждайтесь фильмами с нами!');
        DG.geoJson(data, {
                    onEachFeature: function (feature, layer) {
                        layer.bindPopup(feature.properties.info);
                    }
                }).addTo(map);
    });
 </script>
<script src="templates/js/preloader.js"></script>
<!-- <script src="templates/js/map.js"></script> -->
</body>
</html>