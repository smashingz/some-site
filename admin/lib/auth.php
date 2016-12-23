<?php
session_start();
$login = $_POST["login"];
$password = md5($_POST["password"]);
include_once "func.php";
if (check_admin($login, $password)) {
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
?>