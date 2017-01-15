Администратор <?php echo($_SESSION["login"]) ?>
<form action="lib/exit.php">
    <input type="submit" value="Выход">
</form>
<br>
<?php
include_once "lib/func.php";
showControlPanel();
?>
<table>
    <thead>
    <?php
    showColumnNames();
    ?>
    </thead>
    <tbody>
    <?php
    showAllArticles();
    ?>
    </tbody>
</table>
