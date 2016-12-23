<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
<h1>Админ-панель</h1>
<?php
if(!$_SESSION["login"] && !$_SESSION["password"])require_once "blocks/auth_panel.php";
else
    require_once "blocks/admin_panel.php"
?>
</body>
</html>
