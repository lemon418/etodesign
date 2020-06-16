<?php
    if($_COOKIE['user'] == "") {
        header('Location:registration.php');
    }

    include $_SERVER['DOCUMENT_ROOT'].'/config/db.php';
?>
<html lang="en">
<head>
    <title>Личный кабинет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<? include_once 'blocks/header.php';?>

<a href="myArticles.php"><button>Мои статьи</button></a>
<? include_once 'blocks/footer.php';?>
</body>
</html>

<?php

?>

