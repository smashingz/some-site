<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 23.12.16
 * Time: 1:26
 */
session_start();
unset($_SESSION["login"]);
unset($_SESSION["password"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
?>