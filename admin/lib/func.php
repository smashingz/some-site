<?php
$mysqli=false;
function check_admin($login, $password)
{
    include_once "auth.php";
    global $mysqli;
    connectDB();
    $rez = $mysqli->query("SELECT `admin` FROM `users` WHERE `login`='$login' AND `password`='$password'");
    closeDB();
    if ($rez->fetch_assoc()) return true;
    else return false;
}

function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli('localhost', 'root', '', 'sitedb');
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

function getAllArticles($table)
{
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $result = $mysqli->query("SELECT * FROM `$table`");
    closeDB();
    return toArray($result);
}

function toArray($rez)
{
    $array = array();
    while (($row = $rez->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}

function showAllArticles()
{
    $articles = getAllArticles("tov");
    for ($i = 0; $i < count($articles); $i++) {
        $name = $articles[$i]["name"];
        $vendor=$articles[$i]["vendor"];
        $img = $articles[$i]["image"];
        $descr = $articles[$i]["description"];
        $fulldescr=$articles[$i]["fulldescription"];
        $price = $articles[$i]["price"];
        $type=$articles[$i]["type"];
        include "blocks/elem.php";
    }
}
function deleteElem($name) {
    include_once "func.php";
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $mysqli->query("DELETE FROM `tov` WHERE `name`='$name'");
    closeDB();
}
?>