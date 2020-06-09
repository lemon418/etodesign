<?php

$login = $_POST['login'];
$psw = $_POST['psw'];
//echo $_POST;
//var_dump($_POST);

$db = new PDO('mysql:host=localhost;dbname=etodesign;charset=utf8', 'root', '');
$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '".md5($psw)."'";

$result = $db->query($sql);
echo $sql;

//die();
$user = $result->fetch(PDO::FETCH_ASSOC);;
var_dump($user);

if(count($user) == 0) {
    echo "Такой пользователь не найден";
}

//setcookie('user', $user['name'], time() + 1800, "/");

//header('Location: index.php');

?>