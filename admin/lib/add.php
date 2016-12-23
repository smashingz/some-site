<?php
include_once "func.php";
$name = $_POST['name'];
$vendor = $_POST['vendor'];
$price = $_POST['price'];
$description = $_POST['description'];
$fulldescription = $_POST['fulldescription'];
$image = $_FILES['image']['name'];
$type = $_POST['type'];
global $mysqli;
connectDB();
mysqli_set_charset($mysqli, "utf8");
$fuck=$mysqli->query("SELECT `image` FROM `tov` WHERE `name`='$name'");
$mysqli->query("INSERT INTO `tov` (name, vendor,price,description,fulldescription,image,type) VALUES ('$name' ,'$vendor','$price','$description','$fulldescription','$image','$type')");
closeDB();
move_uploaded_file($_FILES['image']['tmp_name'],'../../files/'.$_FILES['image']['name']);
header("Location:" . $_SERVER["HTTP_REFERER"]);
?>