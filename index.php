<?php
    include 'db.php';
?>
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
    <div class="row">
        <div class="col-12">
            <?php

            $sql = "SELECT * FROM articles LEFT JOIN users ON articles.user_id=users.id ORDER BY articles.id DESC";
            $db -> query($sql);
            $statement = $db -> query($sql);
            $articles = $statement->fetchAll(PDO::FETCH_ASSOC );
//                                var_dump($articles);
            ?>
            <div class="row">
                <? foreach($articles as $article) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                автор статьи: <?=$article['user_name']?>
                            </div>
                            <div class="card-body">
                                <?=$article['text']?>
                                <?=$article['article']?>
                            </div>
                        </div>
                    </div>
                <? } ?>
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
