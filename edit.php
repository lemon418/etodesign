<?php include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>
<html lang="en">
<head>
    <title>Главная</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>


<body>



<?
include_once  $_SERVER['DOCUMENT_ROOT'].'/blocks/header.php';
$id = $_GET['id'];
$sql = "SELECT `text` FROM `articles` WHERE `id` = '$id'";
$db -> query($sql);
$stmt = $db->query($sql);
$article = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($article[0]['text']);



?>


<form class="was-validated" action="models/Edit.php" method="post">
    <div class="mb-3">
        <label for="validationTextarea">Текст статьи</label>
        <textarea class="form-control is-invalid" id="validationTextarea" name="text"><? echo $article[0]['text']; ?></textarea>
        <div class="invalid-feedback">
            В этом окне Вы можете отредактировать статью.
        </div>
    </div>


    <input type="hidden" name="id" value="<? echo $id ?>">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Редактировать</button>
    </div>

</form>


<? include_once 'blocks/footer.php';?>

</body>
</html>