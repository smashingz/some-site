<?php
/**
 * Created by PhpStorm.
 * User: aronax
 * Date: 18.12.16
 * Time: 18:15
 */
if (!empty($_POST["button_reg"])) {
    $login = htmlspecialchars($_POST["login"]);
    $password1 = htmlspecialchars($_POST["password1"]);
    $password2 = htmlspecialchars($_POST["password2"]);
    if ($password1 != $password2) $success = false;
    else $success = addUser($login, md5($password1));
    if (!$success)
        $alert = "Ошибка при регистрации пользователя!";
    else $alert = "Вы успешно зарегистрировались!";
    echo "<script>alert(\"$alert\")</script>";
}
function addUser($login, $password)
{
    include_once "lib/auth.php";
    global $mysqli;
    connectDB();
    $success = $mysqli->query("INSERT INTO `users` (`login`,`password`) VALUES ('$login','$password')");
    closeDB();
    return $success;
}

?>
