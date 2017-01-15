<form action="" method="post">
    <fieldset>
        <legend>Добавить комментарий</legend>
        Имя:<br>
        <input type="text" name="name" value="<?php echo ($_SESSION["login"])?>" readonly><br>
        Комментарий: <br>
        <textarea cols="30" rows="5" name="comment"></textarea><br>
        <input type="submit" value="Добавить" name="add_comment">
    </fieldset>
</form>