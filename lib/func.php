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

function getAllArticles()
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `tov`");
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
    $articles = getAllArticles();
    for ($i = 0; $i < count($articles); $i++){
        $title = $articles[$i]["name"];
        $img=$articles[$i]["image"];
        $descr=$articles[$i]["fulldescription"];
        $price=$articles[$i]["price"];
        include "blocks/list_article.php";
    }
}

?>