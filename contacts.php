<?php session_start()?>
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

    <?php
    if ($_SESSION["login"])
        include_once "blocks/guestbook.php";
    else
        echo "Извините, комментарии только для зарегистрированных пользователей";
    ?>
</div>
<?php include_once "blocks/bottom.php" ?>
</body>
</html>