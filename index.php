<?php
session_start();

include 'classes/query.php';
$query = new Query();
$posts = $query->getPosts();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
        <body>
            <h1>Tous les posts</h1>
            <div id="posts">
        <?php
        foreach ($posts as $post) {
            ?>
                <div class="post">
                    <h2><?= $post['title'] ?></h2>
                    <p><?= $post['content'] ?></p>
                    <p><?= $post['author'] ?></p>
                    <p><?= $post['date'] ?></p>
                </div>
            <?php
        }




        ?>
            </div>
        </body>
</html>

