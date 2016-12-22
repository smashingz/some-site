<?php
//switch ($_GET['page']) {
//    case "news":
//        $block = "list_article.php";
//        break;
//
//    case "info":
//        $block = "header1.php";
//        break;
//}
//?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Магазин | Главная</title>
</head>
<body>
<?php
include_once "blocks/header.php";
?>
<div class="main">
    <img src="files/hottovar.jpg" alt="111" width="100%">
    <!--TODO сделать новостную ленту -->
</div>
<?php
require_once "blocks/bottom.php";
?>
</body>
</html>