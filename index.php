<!DOCTYPE html>
<html lang="ru">
<head>
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/header.php');
 ?>
 <!-- ------------main----------- -->
 <a href="#" ><i class="fas fa-arrow-circle-up scrollup"></i></a>
<div class="modal-wrapper">
    <div class="modal">
        <div class="head">
            <a class="btn-close timesea" href="#">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>
        <div class="infoHeader">
            <span class="filmName">Название: <em id="filmName"></em></span>
            <span class="Seans">Сеанс: <em id="Seans"></em></span>       
            <span class="filmTime">Начало в <em id="filmTime"></em></span>             
        </div>
        <div class="content">
            <div class="infoCinema">            
                <div class="section-hall">
                    <div class="selectSeat">
                        <div class="bg_halls_ind" id="oneHall">
                            <div class="screen_ind">
                                <h2>Экран</h2>
                            </div>
                            <p class="hall_ind" id="hall_ind">Малый зал</p>
                            <div class="rowCenter">
                                <span class="letter">А</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="А" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="А" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="3" data-row="А" data-price="200">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="4" data-row="А" data-price="200">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="5" data-row="А" data-price="200">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="6" data-row="А" data-price="200">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="7" data-row="А" data-price="200">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="8" data-row="А" data-price="200">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="9" data-row="А" data-price="200">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="10" data-row="А" data-price="200">10</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="11" data-row="А" data-price="200">11</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="12" data-row="А" data-price="200">12</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="13" data-row="А" data-price="200">13</p></div>
                            </div>    
                            <div class="rowCenter">
                                <span class="letter">Б</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="Б" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="Б" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="3" data-row="Б" data-price="200">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="4" data-row="Б" data-price="200">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="5" data-row="Б" data-price="200">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="6" data-row="Б" data-price="200">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="7" data-row="Б" data-price="200">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="8" data-row="Б" data-price="200">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="9" data-row="Б" data-price="200">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="10" data-row="Б" data-price="200">10</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="11" data-row="Б" data-price="200">11</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="12" data-row="Б" data-price="200">12</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="13" data-row="Б" data-price="200">13</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="14" data-row="Б" data-price="200">14</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="15" data-row="Б" data-price="200">15</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">В</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="В" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="В" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="3" data-row="В" data-price="200">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="4" data-row="В" data-price="200">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="В" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="В" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="В" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="В" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="В" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="В" data-price="220">10</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="11" data-row="В" data-price="220">11</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="12" data-row="В" data-price="220">12</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="13" data-row="В" data-price="200">13</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="14" data-row="В" data-price="200">14</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="15" data-row="В" data-price="200">15</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">Г</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="Г" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="Г" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="3" data-row="Г" data-price="200">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="4" data-row="Г" data-price="200">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="Г" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="Г" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="Г" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="Г" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="Г" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="Г" data-price="220">10</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="11" data-row="Г" data-price="220">11</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="12" data-row="Г" data-price="220">12</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="13" data-row="Г" data-price="200">13</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="14" data-row="Г" data-price="200">14</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="15" data-row="Г" data-price="200">15</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">Д</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="Д" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="Д" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="3" data-row="Д" data-price="200">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="4" data-row="Д" data-price="200">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="Д" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="Д" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="Д" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="Д" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="Д" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="Д" data-price="220">10</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="11" data-row="Д" data-price="220">11</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="12" data-row="Д" data-price="220">12</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="13" data-row="Д" data-price="200">13</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="14" data-row="Д" data-price="200">14</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="15" data-row="Д" data-price="200">15</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">Е</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="Е" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="Е" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="3" data-row="Е" data-price="220">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="4" data-row="Е" data-price="220">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="Е" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="Е" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="Е" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="Е" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="Е" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="Е" data-price="220">10</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">Ж</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="Ж" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="Ж" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="3" data-row="Ж" data-price="220">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="4" data-row="Ж" data-price="220">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="Ж" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="Ж" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="Ж" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="Ж" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="Ж" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="Ж" data-price="220">10</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">З</span>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="1" data-row="З" data-price="200">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind simple" data-number="2" data-row="З" data-price="200">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="3" data-row="З" data-price="220">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="4" data-row="З" data-price="220">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="5" data-row="З" data-price="220">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="6" data-row="З" data-price="220">6</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="7" data-row="З" data-price="220">7</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="8" data-row="З" data-price="220">8</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="9" data-row="З" data-price="220">9</p></div>
                                <div class="rowLine_ind"><p class="number_ind vip" data-number="10" data-row="З" data-price="220">10</p></div>
                            </div>
                            <div class="rowCenter">
                                <span class="letter">И</span>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="1" data-row="И" data-price="250">1</p></div>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="2" data-row="И" data-price="250">2</p></div>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="3" data-row="И" data-price="250">3</p></div>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="4" data-row="И" data-price="250">4</p></div>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="5" data-row="И" data-price="250">5</p></div>
                                <div class="rowLine_ind"><p class="number_ind love" data-number="6" data-row="И" data-price="250">6</p></div>
                            </div>
                            <div class="docs p-4">
                                <div class="rowLine_ind"><p class=" simple">1</p></div> 
                                <span>Простые</span>
                                <div class="rowLine_ind"><p class=" vip">1</p></div>
                                <span>VIP</span>
                                <div class="rowLine_ind"><p class=" love">1</p></div>
                                <span>Love</span>
                                <div class="rowLine_ind"><p class=" bought">1</p></div>
                                <span>Проданы</span>  
                            </div>
                        </div>
                        <div class="bg_hallsSecond_ind" id="SecHall">
                                <div class="screen_ind">
                                    <h2>Экран</h2>
                                </div>
                                <p class="hall_ind" id="hall_ind">Большой зал</p>
                                <div class="rowCenter">
                                    <span class="letter">А</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="А" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="А" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="А" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="А" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="А" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="6" data-row="А" data-price="200">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="7" data-row="А" data-price="200">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="8" data-row="А" data-price="200">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="9" data-row="А" data-price="200">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="10" data-row="А" data-price="200">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="11" data-row="А" data-price="200">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="12" data-row="А" data-price="200">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="13" data-row="А" data-price="200">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="14" data-row="А" data-price="200">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="15" data-row="А" data-price="200">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="16" data-row="А" data-price="200">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="17" data-row="А" data-price="200">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="18" data-row="А" data-price="200">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="А" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="А" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="А" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="А" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="А" data-price="200">23</p></div>
                                </div>    
                                <div class="rowCenter">
                                    <span class="letter">Б</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Б" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Б" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Б" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="Б" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="Б" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="6" data-row="Б" data-price="200">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="7" data-row="Б" data-price="200">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="8" data-row="Б" data-price="200">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="9" data-row="Б" data-price="200">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="10" data-row="Б" data-price="200">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="11" data-row="Б" data-price="200">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="12" data-row="Б" data-price="200">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="13" data-row="Б" data-price="200">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="14" data-row="Б" data-price="200">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="15" data-row="Б" data-price="200">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="16" data-row="Б" data-price="200">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="17" data-row="Б" data-price="200">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="18" data-row="Б" data-price="200">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="Б" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="Б" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Б" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="Б" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="Б" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="Б" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="Б" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">В</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1"  data-row="В" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2"  data-row="В" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3"  data-row="В" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4"  data-row="В" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5"  data-row="В" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="6"  data-row="В" data-price="200">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="7"  data-row="В" data-price="200">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="8"  data-row="В" data-price="200">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="9"  data-row="В" data-price="200">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="10" data-row="В" data-price="200">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="11" data-row="В" data-price="200">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="12" data-row="В" data-price="200">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="13" data-row="В" data-price="200">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="14" data-row="В" data-price="200">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="15" data-row="В" data-price="200">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="16" data-row="В" data-price="200">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="17" data-row="В" data-price="200">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="18" data-row="В" data-price="200">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="В" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="В" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="В" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="В" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="В" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="В" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="В" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Г</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Г" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Г" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Г" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="Г" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="Г" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="Г" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="Г" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="Г" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="Г" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="Г" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="Г" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="Г" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="Г" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="Г" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="Г" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="Г" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="Г" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="Г" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="Г" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="Г" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Г" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="Г" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="Г" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="Г" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="Г" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Д</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Д" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Д" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Д" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="Д" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="Д" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="Д" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="Д" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="Д" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="Д" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="Д" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="Д" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="Д" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="Д" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="Д" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="Д" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="Д" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="Д" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="Д" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="Д" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="Д" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Д" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="Д" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="Д" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="Д" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="Д" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Е</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Е" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Е" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Е" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="Е" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="Е" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="Е" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="Е" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="Е" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="Е" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="Е" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="Е" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="Е" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="Е" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="Е" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="Е" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="Е" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="Е" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="Е" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="Е" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="Е" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Е" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="Е" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="Е" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="Е" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="Е" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Ж</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Ж" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Ж" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Ж" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="Ж" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="Ж" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="Ж" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="Ж" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="Ж" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="Ж" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="Ж" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="Ж" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="Ж" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="Ж" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="Ж" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="Ж" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="Ж" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="Ж" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="Ж" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="Ж" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="Ж" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Ж" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="Ж" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="Ж" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="Ж" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="Ж" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">З</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="З" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="З" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="З" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="З" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="З" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="З" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="З" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="З" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="З" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="З" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="З" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="З" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="З" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="З" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="З" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="З" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="З" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="З" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="З" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="З" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="З" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="З" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="З" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="З" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="З" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">И</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="И" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="И" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="И" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="И" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="И" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="И" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="И" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="И" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="И" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="И" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="И" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="И" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="И" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="И" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="И" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="И" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="И" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="И" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="И" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="И" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="И" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="И" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="И" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="И" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="И" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">К</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="К" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="К" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="К" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4" data-row="К" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5" data-row="К" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6"  data-row="К" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7"  data-row="К" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8"  data-row="К" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9"  data-row="К" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="К" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="К" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="К" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="К" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="К" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="К" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="К" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="К" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="К" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="19" data-row="К" data-price="220">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="20" data-row="К" data-price="220">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="К" data-price="200">21</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="22" data-row="К" data-price="200">22</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="23" data-row="К" data-price="200">23</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="24" data-row="К" data-price="200">24</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="25" data-row="К" data-price="200">25</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Л</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1" data-row="Л" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2" data-row="Л" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3" data-row="Л" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="4" data-row="Л" data-price="220">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="5" data-row="Л" data-price="220">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="6" data-row="Л" data-price="220">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="7" data-row="Л" data-price="220">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="8" data-row="Л" data-price="220">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="9" data-row="Л" data-price="220">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="10" data-row="Л" data-price="220">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="11" data-row="Л" data-price="220">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="12" data-row="Л" data-price="220">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="13" data-row="Л" data-price="220">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="14" data-row="Л" data-price="220">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="15" data-row="Л" data-price="220">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="16" data-row="Л" data-price="220">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="17" data-row="Л" data-price="220">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind vip" data-number="18" data-row="Л" data-price="220">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="Л" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="Л" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Л" data-price="200">21</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">М</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1"  data-row="М" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2"  data-row="М" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3"  data-row="М" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4"  data-row="М" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5"  data-row="М" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="6"  data-row="М" data-price="200">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="7"  data-row="М" data-price="200">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="8"  data-row="М" data-price="200">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="9"  data-row="М" data-price="200">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="10" data-row="М" data-price="200">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="11" data-row="М" data-price="200">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="12" data-row="М" data-price="200">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="13" data-row="М" data-price="200">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="14" data-row="М" data-price="200">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="15" data-row="М" data-price="200">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="16" data-row="М" data-price="200">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="17" data-row="М" data-price="200">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="18" data-row="М" data-price="200">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="М" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="М" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="М" data-price="200">21</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">Н</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="1"  data-row="Н" data-price="200">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="2"  data-row="Н" data-price="200">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="3"  data-row="Н" data-price="200">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="4"  data-row="Н" data-price="200">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="5"  data-row="Н" data-price="200">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="6"  data-row="Н" data-price="200">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="7"  data-row="Н" data-price="200">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="8"  data-row="Н" data-price="200">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="9"  data-row="Н" data-price="200">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="10" data-row="Н" data-price="200">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="11" data-row="Н" data-price="200">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="12" data-row="Н" data-price="200">12</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="13" data-row="Н" data-price="200">13</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="14" data-row="Н" data-price="200">14</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="15" data-row="Н" data-price="200">15</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="16" data-row="Н" data-price="200">16</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="17" data-row="Н" data-price="200">17</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="18" data-row="Н" data-price="200">18</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="19" data-row="Н" data-price="200">19</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="20" data-row="Н" data-price="200">20</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind simple" data-number="21" data-row="Н" data-price="200">21</p></div>
                                </div>
                                <div class="rowCenter">
                                    <span class="letter">О</span>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="1" data-row="О" data-price="250">1</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="2" data-row="О" data-price="250">2</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="3" data-row="О" data-price="250">3</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="4" data-row="О" data-price="250">4</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="5" data-row="О" data-price="250">5</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="6" data-row="О" data-price="250">6</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="7" data-row="О" data-price="250">7</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="8" data-row="О" data-price="250">8</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="9" data-row="О" data-price="250">9</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="10" data-row="О" data-price="250">10</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="11" data-row="О" data-price="250">11</p></div>
                                    <div class="rowLineSecond_ind"><p class="numberSecond_ind love" data-number="12" data-row="О" data-price="250">12</p></div>
                                </div>
                                <div class="docs p-3">
                                    <div class="rowLineSecond_ind"><p class=" simple">1</p></div> 
                                    <span>Простые</span>
                                    <div class="rowLineSecond_ind"><p class=" vip">1</p></div>
                                    <span>VIP</span>
                                    <div class="rowLineSecond_ind"><p class=" love">1</p></div>
                                    <span>Love</span> 
                                    <div class="rowLine_ind"><p class=" bought">1</p></div>
                                    <span>Проданы</span>  
                                </div>
                        </div>
                    </div> 
                    <div class="payTicket">
                    <p class="plsSel">Пожалуйста, выберите место(max 5):</p>      
                    <!-- <form class="buyForm form-row">   
                            <div class="form-group ">
                                    <label for="rowSeat">Ряд:</label>
                                <select class="form-control" id="rowSeat">                               
                                <option value="0">Ряд:</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="placeSeat">Место:</label>
                                <select class="form-control" id="placeSeat">
                                    <option value='0'>Место:</option>
                                </select>
                            </div>
                        </form> -->
                        <div class="priceForm">
                            <p>Выбранные места:</p>
                            <ul id="list">
                            </ul>
                            <div class="pay">
                                <p>Сумма к оплате: <span id="summa"></span> руб.</p>
                                <div class="button text-center buyTicket">
                                        <button class="btn btn-primary" id="buyTicket" >Приобрести</button>
                                </div>                                 
                            </div>                         
                        </div>
                    </div>                                                      
                </div>
            </div>
        </div>
    </div>
</div>


<section id="timetable">
   
<!-- ------------cards----------- -->

    <div class="container " >  
        <p id="premier" class="wow zoomIn">Премьеры месяца</p>         
        <div class="row">     
                <div class="card sidecard wow zoomIn"  data-wow-delay="0.2s" data-wow-duration="0.6s"> 
                    <div class="card-header">
                        <h5>Расписание на сегодня</h5>
                        <p><?php echo date("d.m.Y"); ?> </p> 
                    </div>
                    <div class="card-body">
                    <?php
                        include('connection.php'); 
                        // достаем все новости
                        $sql1 = mysql_query("SELECT * FROM `schedule`") or die(mysql_error());    
                        while($graph = mysql_fetch_array($sql1, MYSQL_ASSOC)){
                        echo '<div class="film">';
                        echo    '<span>'.$graph['name']. ' <sup class="red" style="color: rgb(132, 185, 255); font-size:14px"> ' .$graph['hall'].' зал</sup></span>';
                        echo     '<p><span class="timesea">'.$graph['begin1'].'</span><span class="timesea">'.$graph['begin2'].'</span><span class="timesea">'.$graph['begin3'].'</span><span class="timesea">'.$graph['begin4'].'</span></p>';
                        echo     '<hr class="indHr">';
                        echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="card-footer perehod text-center">
                        <a href="#" id="perehod" class="open_window">Как купить?</a>
                    </div> 
                    <div class="overlay"></div>
                        <div class="popup">
                        <div class="close_window">x</div>
                        <div class="contentModalBuy">
                            <ul id="listBuy">
                                <span></span><li>Выберите предпочитаемый фильм</li>
                                <span><li>Нажмите на интересуемое время</li></span>
                                <span><li>Выберите место</li></span>
                                <span><li>Нажмите на кнопку "Приобрести"</li></span>
                                <span><li>Пройдите процедуру оплаты</li></span>                                                                                                                
                            </ul>
                        </div>
                    </div>       
                </div> 
            <?php
            // подключение к бд
            include('connection.php'); 
            // достаем все новости
            $sql = mysql_query("SELECT * FROM `CardFilm`") or die(mysql_error());    
            while($oneFilm = mysql_fetch_array($sql, MYSQL_ASSOC)){
            echo '<div class="col-12 col-md-6 col-lg-4 col-lg-4">';
            echo    '<div class="card cardfilm wow zoomInDown" data-wow-delay="0.3s">';
            echo            '<img class="card-img-top" src="templates/img/'.$oneFilm['image'].'" alt="В скором будущем здесь будет обложка :)">';
            echo        '<div class="card-img-overlay h-auto d-flex flex-column justify-content-end">';
            echo                '<p class="janr">Жанр: '.$oneFilm['Genre'].'</p>';
            echo                '<p class="author">Режиссер: '.$oneFilm['Producer'].'</p>';
            echo                '<p class="when">C '.$oneFilm['DateFrom'].' по '.$oneFilm['DateTo'].'</p>';             
            echo                '<p class="closer">Закрыть</p>';
            echo                '<button class="aboutfilm btn text-white wow zoomInUp" data-wow-delay="0.4s">О фильме</button>';                          
            echo            '<div class="test">';
            echo                '<p class="card-text">'.$oneFilm['Description'].'</p>';
            echo            '</div> ';                             
            echo        '</div>';                 
            echo    '</div>';
            echo '</div>';
            }
            ?>



        </div>

        <div class="row">
            <!-- <p id="rasps" >Расписание кинотеатра</p> -->
            <!-- <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="3">Большой зал</td>
                        <td colspan="3">Малый зал</td>
                    </tr>
                </thead>
                <tr>
                    <td>09-10</td>
                    <td> <span>Волшебный парк Джун 3D</span><br> <span>Мультфильм</span>, <span>1ч. 30 мин </span>(<span>6+</span>)</td>
                    <td>250 280 500</td>
                    <td>09-10</td>
                    <td><span>Рожденный стать королем</span><br> <span>Мультфильм</span>, <span>2ч. 10 мин </span>(<span>6+</span>)</td>
                    <td>200 220 400</td>
                </tr>
                <tr>
                    <td>09-10</td>
                    <td> <span>Волшебный парк Джун 3D</span><br> <span>Мультфильм</span>, <span>1ч. 30 мин </span>(<span>6+</span>)</td>
                    <td>250 280 500</td>
                    <td>09-10</td>
                    <td><span>Рожденный стать королем</span><br> <span>Мультфильм</span>, <span>2ч. 10 мин </span>(<span>6+</span>)</td>
                    <td>200 220 400</td>
                </tr>
                <tr>
                    <td>09-10</td>
                    <td> <span>Волшебный парк Джун 3D</span><br> <span>Мультфильм</span>, <span>1ч. 30 мин </span>(<span>6+</span>)</td>
                    <td>250 280 500</td>
                    <td>09-10</td>
                    <td><span>Рожденный стать королем</span><br> <span>Мультфильм</span>, <span>2ч. 10 мин </span>(<span>6+</span>)</td>
                    <td>200 220 400</td>
                </tr>               
            </table>  -->
        </div>  
    </div>
</section>

<!-- ------------footer----------- -->
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
include($myRoot . '/footer.php');
 ?>
<script src="templates/js/java.js"></script>
<script src="templates/js/bought.js"></script>
<script src="templates/js/preloader.js"></script>
</body>
</html>