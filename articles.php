<?php
include 'db.php';
$id = $_COOKIE['user'];

$text = $_POST['text'];

$sql = "INSERT INTO `articles` (`user_id`, `text`) VALUES ('$id', '$text')";
if(isset($_COOKIE['user'])) {
    $db -> query($sql);



} else {
	echo "Чтобы отправить статью необходимо авторизоваться";
}

header('Location: /lk.php');

?>