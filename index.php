<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Лаб4.2</title>
</head>
<body>
<?php
require_once "blocks/header.php";
?>
<div class="menu">
    <table width="100%">
        <tr>
            <td><a href="#">Главная</a></td>
            <td><a href="#">Аппаратное<br>обеспечение</a></td>
            <td><a href="#">Программное<br>обеспечение</a></td>
            <td><a href="#">Игры</a></td>
            <td><a href="#">Компьютеры</a></td>
            <td><a href="#">Сервера\сеть</a></td>
            <td><a href="#">Контакты</a></td>
        </tr>
    </table>
</div>
<div class="main">
    <div class="search">
        <img src="files/search.jpg" alt="">
        <h1>Поиск</h1>
        <form action="#">
            <select name="brand">
                <option value="">Фирма1</option>
                <option value="">Фирма2</option>
                <option value="">Фирма3</option>
            </select><br>
            <select name="product">
                <option value="">Продукт1</option>
                <option value="">Продукт2</option>
                <option value="">Продукт3</option>
            </select><br>
            <button>Поиск</button>
        </form>
    </div>
    <div class="categories">
        <p>Аппаратное обеспечение</p>
        <ul>
            <li><a href="#">Материнские платы</a></li>
            <li><a href="#">Процессоры</a></li>
            <li><a href="#">Оперативная память</a></li>
            <li><a href="#">Видеокарты</a></li>
            <li><a href="#">Жёсткие диски</a></li>
        </ul>
        <p>Программное обеспечение</p>
        <p>Игры</p>
        <p>Компьютеры</p>
        <p>Серверы\сеть</p>
    </div>
    <div class="info">
        <img src="files/hottovar.jpg" alt="111" width="100%">
        <table>
            <tr>
                <td>
                    <table class="tovar">
                        <tr>
                            <td class="headtov"><h1>ASUS A88X-PRO</h1></td>
                        </tr>
                        <tr>
                            <td class="imgtov"><img src="files/1.jpg" alt="333"></td>
                        </tr>
                        <tr>
                            <td class="tovopis">
                                <span class="cost">9999 руб.</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt veniam laudantium
                                    quisquam quasi. Non illo obcaecati maiores fugit, architecto tempora modi ex ullam
                                    sunt, voluptas quo ducimus quibusdam harum. Aliquam?</p></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="tovar">
                        <tr>
                            <td class="headtov"><h1>Intel Core i5-4590</h1></td>
                        </tr>
                        <tr>
                            <td class="imgtov"><img src="files/2.jpg" alt="333"></td>
                        </tr>
                        <tr>
                            <td class="tovopis">
                                <span class="cost">9999 руб.</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt veniam laudantium
                                    quisquam quasi. Non illo obcaecati maiores fugit, architecto tempora modi ex ullam
                                    sunt, voluptas quo ducimus quibusdam harum. Aliquam?</p></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="tovar">
                        <tr>
                            <td class="headtov"><h1>Acer Aspire E5-722-65DJ</h1></td>
                        </tr>
                        <tr>
                            <td class="imgtov"><img src="files/3.jpg" alt="333"></td>
                        </tr>
                        <tr>
                            <td class="tovopis">
                                <span class="cost">9999 руб.</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt veniam laudantium
                                    quisquam quasi. Non illo obcaecati maiores fugit, architecto tempora modi ex ullam
                                    sunt, voluptas quo ducimus quibusdam harum. Aliquam?</p></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="tovar">
                        <tr>
                            <td class="headtov"><h1>TP-LINK TL-WR842N</h1></td>
                        </tr>
                        <tr>
                            <td class="imgtov"><img src="files/4.jpg" alt="333"></td>
                        </tr>
                        <tr>
                            <td class="tovopis">
                                <span class="cost">9999 руб.</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt veniam laudantium
                                    quisquam quasi. Non illo obcaecati maiores fugit, architecto tempora modi ex ullam
                                    sunt, voluptas quo ducimus quibusdam harum. Aliquam?</p></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="bottom">
    <p align="center">2016 г.</p>
</div>
</body>
</html>