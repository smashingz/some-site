Администратор <?php echo($_SESSION["login"]) ?>
<form action="lib/exit.php">
    <input type="submit" value="Выход">
</form>
<br>
<table>
    <thead>
    <tr>
        <td>Имя</td>
        <td>Производитель</td>
        <td>Цена</td>
        <td>Краткое<br>описание</td>
        <td>Полное<br>описание</td>
        <td>Тип</td>
        <td>Изображение</td>
        <td>Удаление<br>записи</td>
    </tr>
    </thead>
    <?php
    include_once "lib/func.php";
    showAllArticles();
    ?>
</table>
