

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
                    <a href="index.php" class="nav-link">Главная</a>

                </li>


                <?php
                if(isset($_COOKIE['user'])):
                ?>
                    <li class="nav-item">
                        <a href="lk.php" class="nav-link">Личный кабинет</a>


                    </li>
                <? 
                $id = $_COOKIE['user'];
                $sql = "SELECT `user_name` FROM `users` WHERE `id` = '$id'";
                $result = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                $name = $result[0]['user_name']; 					
                ?>    
                   
                <?php endif; ?>

            </ul>

            <?php
            if(isset($_COOKIE['user'])):
                ?>
                <a href="lk.php">
                <button class="btn btn-outline-success my-2 my-sm-0"> <?= $name ?> </button>
            </a>
                <a href="models/exit.php">
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