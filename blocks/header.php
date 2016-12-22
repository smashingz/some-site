<div class="header">
    <img src=files/littlecomp.gif alt="emblem">
    <span id="giga">Giga</span><span id="space">Space</span><br>
    We provide the power for your computer system
    <?php
    include_once "lib/func.php";
    if (!check_user($_SESSION["login"], $_SESSION["password"]))
        include_once "blocks/auth_form.php";
    else
        include_once "blocks/user_form.php";
    ?>
</div>
<div class="menu">
    <table width="100%">
        <tr>
            <td><a href="index.php">Главная</a></td>
            <td><a href="find.php">Аппаратное<br>обеспечение</a></td>
            <td><a href="#">Программное<br>обеспечение</a></td>
            <td><a href="#">Сервера\сеть</a></td>
            <td><a href="contacts.php">Контакты</a></td>
        </tr>
    </table>
</div>