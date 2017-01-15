<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 18.12.16
 * Time: 14:42
 */
include_once "lib/check.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин | Регистрация</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="header">
    <img src=files/littlecomp.gif alt="emblem">
    <span id="giga">Giga</span><span id="space">Space</span><br>
    We provide the power for your computer system
</div>
<div class="main">
    <div class="reg">
        <form action="" method="post">
            <fieldset>
                <legend>Регистрация:</legend>
                Имя: <br>
                <input id="login" type="text" name="login" required><br>
                Пароль: <br>
                <input id="password" type="password" name="password1" required><br>
                Повторите пароль: <br>
                <input id="password2" type="password" name="password2" required><br>
                <input type="submit" value="Отправить" name="button_reg">
            </fieldset>
        </form>
    </div>
    <a href="index.php">Вернуться на главную</a>
</div>
</body>
</html>
