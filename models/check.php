<?php

$user_name = $_POST['name'];
$login = $_POST['login'];
$psw = $_POST['psw'];
// echo $user_name;
//echo $login;
//echo $psw;

if(mb_strlen($login) < 3 || mb_strlen($login) > 15) {
    echo "bad_login";
    exit();
} else if(mb_strlen($psw) < 5 || mb_strlen($psw) > 90) {
    echo "bad_psw";
    exit();

}
$psw = md5($psw);

include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
$sql = "INSERT INTO `users` (`user_name`, `login`, `password`) VALUES ('$user_name', '$login', '$psw')";
$db -> query($sql);

header('Location: ../index.php');

?>