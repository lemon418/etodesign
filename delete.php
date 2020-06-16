<?php
include 'db.php';
$id = $_POST['id'];
// var_dump($_POST);
// var_dump($_POST['id']);

//$id = $_POST['name'];
$sql = "DELETE FROM `articles` WHERE `id` = '$id'";
$db -> query($sql);
header('Location: lk.php');
?>


