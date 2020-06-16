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
