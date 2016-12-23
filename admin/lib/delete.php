<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 23.12.16
 * Time: 19:42
 */
include_once "func.php";
deleteElem($_POST["name"]);
//print_r($_POST["name"]);
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>