<?php
if (!empty($_POST["comment"])) {
    $name = htmlspecialchars($_POST["name"]);
    $comment = htmlspecialchars($_POST["comment"]);
    include_once "lib/func.php";
    connectDB();
    if (!$name)
        $mysqli->query("INSERT INTO `comments` (`comment`) VALUES ('$comment')");
    else
        $mysqli->query("INSERT INTO `comments` (`name`,`comment`) VALUES ('$name','$comment')");
    closeDB();
    header("Location: contacts.php");
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Магазин | Контакты</title>
</head>
<body>
<?php include_once "blocks/header.php" ?>
<div class="main">
    <?php
    include_once "lib/func.php";
    showComments();
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Добавить комментарий</legend>
            Имя:<br>
            <input type="text" name="name"><br>
            Комментарий: <br>
            <textarea cols="30" rows="5" name="comment"></textarea><br>
            <input type="submit" value="Добавить" name="add_comment">
        </fieldset>
    </form>
</div>
<?php include_once "blocks/bottom.php" ?>
</body>
</html>