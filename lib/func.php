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
    mysqli_set_charset($mysqli, "utf8");
    $result = $mysqli->query("SELECT * FROM `$table`");
    closeDB();
    return toArray($result);
}

function findArticles($type)
{
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $result = $mysqli->query("SELECT * FROM `tov` WHERE `type`='$type'");
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

function showAllArticles($type)
{
    $articles = findArticles($type);
    for ($i = 0; $i < count($articles); $i++) {
        $title = $articles[$i]["name"];
        $img = $articles[$i]["image"];
        $descr = $articles[$i]["description"];
        $price = $articles[$i]["price"];
        include "blocks/list_article.php";
    }
}

function showFullArticle($name)
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $articles = $mysqli->query("SELECT * FROM `tov` WHERE `name`='$name'");
    closeDB();
    $articles = toArray($articles);
    $title = $articles[0]["name"];
    $img = $articles[0]["image"];
    $descr = $articles[0]["fulldescription"];
    $price = $articles[0]["price"];
    include "blocks/list_article.php";


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
    if (!count($comm))
        echo "Комментариев нет<br>";
    else
        for ($i = 0; $i < count($comm); $i++) {
            $n = $comm[$i]["name"];
            $c = $comm[$i]["comment"];
            include "blocks/comment.php";
        }
}

function showVendors($type)
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    $vend = $mysqli->query("SELECT `vendor` FROM `tov` WHERE `type`='$type'");
    closeDB();
    $vend = toArray($vend);
    for ($i = 0; $i < count($vend); $i++) {
        $a = $vend[$i]["vendor"];
        print("<option>" . $a . "</option >");
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

function findVendors($vendor)
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $rez = $mysqli->query("SELECT * FROM `tov` WHERE `vendor`='$vendor'");
    closeDB();
    $rez = toArray($rez);
    for ($i = 0; $i < count($rez); $i++) {
        $title = $rez[$i]["name"];
        $img = $rez[$i]["image"];
        $descr = $rez[$i]["description"];
        $price = $rez[$i]["price"];
        include "blocks/list_article.php";
    }
}

function findByName($name)
{
    $rez = getAllArticles("tov");
    for ($i = 0; $i < count($rez); $i++) {
        if (stristr($rez[$i]["name"], $name) || stristr($rez[$i]["fulldescription"], $name)) {
            $title = $rez[$i]["name"];
            $img = $rez[$i]["image"];
            $descr = $rez[$i]["description"];
            $price = $rez[$i]["price"];
            include "blocks/list_article.php";
        }
    }
}

?>