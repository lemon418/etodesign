<?php
//    session_start ();
include 'db.php';

$login = $_POST['login'];
$psw = $_POST['psw'];
//echo $_POST;
//var_dump($_POST);

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '".md5($psw)."'";

$result = $db->query($sql);
// echo $sql;

//die();
$user = $result->fetch(PDO::FETCH_ASSOC);
// var_dump($user);

if(count($user) == 4) {
//    $_SESSION['id'] = $user['id'];
//    var_dump($_SESSION['id']);
    setcookie('user', $user['id'], time() + 600, "/");
    header('Location: index.php');
    echo "You've logged in";
} else {
    echo "Enter your password correctly";
}

header('Location: /');

?>