<?php session_start() ?>
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
    require_once "blocks/search.php";
    include_once "lib/func.php";
    if ($_GET["title"])
        showFullArticle($_GET["title"]);
    else if ($_GET["type"]) showAllArticles($_GET["type"]);
    else if ($_GET["find"] && $_GET["find"] != "Поиск...") {
        findByName($_GET["find"]);
    } else if ($_GET["brand"])
        findVendors($_GET["brand"]);
    ?>
</div>
<?php
require_once "blocks/bottom.php"
?>
</body>
</html>