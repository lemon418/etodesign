<div class="container my-4">
    <div class="row"><h1>мои статьи</h1></div>
    <div class="row">
        <div class="col-12">
            <?php
            $id = $_COOKIE['user'];
            //            var_dump($id);
            include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
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

                    <div class="col">
                        <form action="models/delete.php" method="post">
                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="id" value="<?=$article['id']?>">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </div>
                            </div>
                        </form>
                        <form action="edit.php" method="get">
                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="id" value="<?=$article['id']?>">
                                    <button type="submit" class="btn btn-success">Редактировать</button>
                                </div>
                            </div>
                        </form>
                    </div>

                <? } ?>
            </div>


            <div class="row">
                <a href="add.php"><button type="button" class="btn btn-primary">Добавить статью</button></a>
            </div>
        </div>
    </div>
</div>