


<html lang="en">
<head>
    <title>Bootstrap Eto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="et-design.com" class="navbar-brand">
            <img src="img/logo.jpg" width="30px" height="30px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="#navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Домой</a>

                </li>


                <?php
                if(isset($_COOKIE['user'])):?>
                    <li class="nav-item">
                        <a href="lk.php" class="nav-link">Личный кабинет</a>


                    </li>
                <?php endif; ?>

            </ul>

            <?php
            if(isset($_COOKIE['user'])):
                ?>
                <a href="exit.php">
                    <button class="btn btn-outline-success my-2 my-sm-0">Выход</button>
                </a>


            <?php else: ?>

                <a href="enter.php">
                    <button class="btn btn-outline-success my-2 my-sm-0">Вход</button>
                </a>


                <a href="registration.php">
                    <button class="btn btn-outline-success my-2 my-sm-0">Регистрация</button>
                </a>

            <?php endif; ?>
        </div>

    </nav>
</header>
<body>



<div class="container my-4">
    <div class="row"><h1>мои статьи</h1></div>
    <div class="row">
        <div class="col-12">
            <?php
            $id = $_COOKIE['user'];
            //            var_dump($id);
            include 'db.php';
            $sql = "SELECT * FROM articles WHERE `user_id`='$id' ORDER BY id DESC";
            $db -> query($sql);
            $statement = $db -> query($sql);
            $articles = $statement->fetchAll(PDO::FETCH_ASSOC );

            ?>

            <div class="row">
                <? foreach($articles as $article) { ?>
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">
                            <?=$article['text']?>
                            <?=$article['article']?>
                        </div>
                    </div>
                </div>

                <div class=""col-md-4">
                <form action="delete.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$article['id']?>">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </div>
                </form>
            </div>

        <? } ?>
        </div>


        <div class="col">
            <form action="articles.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Добавить статью</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<footer>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        здесь будут телефоны, реклама, контакты и т. д.
    </nav>
</footer>
</body>
</html>



