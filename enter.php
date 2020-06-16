<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
<? include_once 'blocks/header.php';?>
<div class="container md-4">
    <h1>Авторизуйтесь</h1>
    <form action="models/auth.php" method="post">

        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
        <input type="text" class="form-control" name="psw" id="psw" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Войти</button>
    </form>

</div>
<? include_once 'blocks/footer.php';?>
</body>
</html>