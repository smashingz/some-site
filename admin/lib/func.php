<?php
$mysqli = false;
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
        $vendor = $articles[$i]["vendor"];
        $img = $articles[$i]["image"];
        $descr = $articles[$i]["description"];
        $fulldescr = $articles[$i]["fulldescription"];
        $price = $articles[$i]["price"];
        $type = $articles[$i]["type"];
        include "blocks/elem.php";
    }
}

function getColumnNames()
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    $names = $mysqli->query("SHOW COLUMNS from `tov`");
    $names = toArray($names);
    foreach ($names as &$name) $name = $name["Field"];
    unset($name);
    return $names;
}

function showColumnNames()
{
    $names = getColumnNames();
    echo "<tr>";
    for ($i = 0; $i < count($names); $i++) {
        print("<td>" . $names[$i] . "</td>");
    }
    echo "<td></td>";
    echo "</tr>";
}

function deleteElem($name)
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    mysqli_set_charset($mysqli, "utf8");
    $image=$mysqli->query("SELECT `image` FROM `tov` WHERE `name`='$name'");
    $mysqli->query("DELETE FROM `tov` WHERE `name`='$name'");
    closeDB();
    $image=toArray($image);
    unlink('../../files/'.$image[0]['image']);
}

function getTypes()
{
    include_once "func.php";
    global $mysqli;
    connectDB();
    $types = $mysqli->query("SELECT DISTINCT `type` FROM `tov`");
    $types=toArray($types);
    foreach ($types as &$type) $type=$type["type"];
    unset($type);
    return $types;
}

function showControlPanel()
{
    echo "<form enctype='multipart/form-data' action='lib/add.php' method='post' class='add_title'>";
    echo "<fieldset><legend>Добавить запись</legend>";
    include_once "func.php";
    $names = getColumnNames();
    foreach ($names as $name) {
        if ($name == "image")
            echo "$name: <input type='file' name='$name'><br>";
        else if ($name == "type") {
            echo "$name: <select name='$name'>";
            $types = getTypes();
            foreach ($types as $type) echo "<option>$type</option>";
            echo "</select><br>";
        } else
            echo "$name: <textarea name='$name' cols='15' rows='1'></textarea><br>";
    }
    echo "<input type=\"submit\" value=\"Добавить\">";
    echo "</fieldset></form><br>";
}

?>