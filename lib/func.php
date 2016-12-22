<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 02.12.16
 * Time: 2:41
 */
$mysqli = false;
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
        $title = $articles[$i]["name"];
        $img = $articles[$i]["image"];
        $descr = $articles[$i]["description"];
        $price = $articles[$i]["price"];
        include "blocks/list_article.php";
    }
}

function showBanners()
{
    echo
    "<table align='center'
    <tr>";
    $br = getAllArticles("banners");
    echo "<br>";
    for ($i = 0; $i < count($br); $i++) {
        echo "<td><a href=" . $br[$i]["redirect"] . "><img src=" . $br[$i]["adress"] . " width='75' height='25'></a></td>";
    }
    echo
    "</tr>
    </table>";
}

function showComments()
{
    $comm = getAllArticles("comments");
    for ($i = 0; $i < count($comm); $i++) {
        $n = $comm[$i]["name"];
        $c = $comm[$i]["comment"];
        include "blocks/comment.php";
    }
}

function check_user($login, $password)
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    $rez = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
    closeDB();
    if ($rez->fetch_assoc()) return true;
    else return false;
}

?>