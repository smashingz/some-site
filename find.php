<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Магазин | Аппаратное обеспечение</title>
</head>
<body>
<?php require_once "blocks/header.php"; ?>
<div class="main">
    <?php
    //    require_once "blocks/search.php";
    //    require_once "blocks/categories.php";
    //    ?>
    <?php
    include_once "lib/func.php";
    showAllArticles();
    ?>
</div>
<?php
require_once "blocks/bottom.php"
?>
</body>
</html>