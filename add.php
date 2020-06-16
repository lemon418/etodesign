<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
?>
<html lang="en">
<head>
    <title>Главная</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<? include_once 'blocks/header.php';?>

<form class="was-validated" action="models/Add.php" method="post">

        <input type="text" placeholder="Заголовок" name="title"><br>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Текст статьи" name="text" required><? echo $article[0]['text']; ?></textarea>
        <div class="invalid-feedback">
            Напишите Вашу статью в окне.
        </div>
    </div>


    <input type="hidden" name="id" value="<? echo $id ?>">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Добавить</button>
    </div>

</form>


<? include_once 'blocks/footer.php';?>

</body>

</html>
