<?php

include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

var_dump($_POST);

$user_id = $_POST['id'];

$title = $_POST['title'];

$text = $_POST['text'];

$sql = "INSERT INTO `articles`(`user_id`, `title`, `text`) VALUES ('$user_id', '$title', '$text')";

$db->query($sql);

header('Location: ../myArticles.php');


?>