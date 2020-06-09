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
    <div class="container md-4">
        <h1>Форма регистрации</h1>
        <form action="chek.php" method="post" name="login" id="login">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
            <input type="text" class="form-control" name="psw" id="psw" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрировать</button>
        </form>
    </div>
</body>
</html>