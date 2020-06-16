<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

//var_dump($_POST['id']);
//var_dump($_POST['text']);

$id = $_POST['id'];
$text = $_POST['text'];
$sql = "UPDATE `articles` SET `text`='$text' WHERE `id` = '$id'";

$db->query($sql);

header("Location: ../myArticles.php");
?>

статья изменена
