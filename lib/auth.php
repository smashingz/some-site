<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 19.12.16
 * Time: 0:56
 */
//if ($_SESSION["error_auth"]) {
//    unset($_SESSION["error_auth"]);
//    $alert = "Неверные логин и/или пароль";
//    echo "<script>alert(\"$alert\")</script>";
//}
session_start();
include_once "func.php";
$login = $_POST["login"];
$password = md5($_POST["password"]);
if (check_user($login, $password)) {
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
}
//} else $_SESSION["error_auth"] = 1;
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;