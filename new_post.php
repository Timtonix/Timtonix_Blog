<?php
session_start();
 include 'classes/query.php';

 if (isset($_POST['title']) && isset($_POST['content'])) {
     $title = htmlspecialchars($_POST['title']);
     $content = htmlspecialchars($_POST['content']);
     $query = new Query();
     $query->addPost("Admin", $title, $content);
 }

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
        <body>
        <h1>Nouveau Post</h1>
        <form action="#" method="post">
            <input type="text" name="title" placeholder="Titre"><br>
            <textarea name="content" placeholder="Contenu" cols="30" rows="15"></textarea><br>
            <input type="submit" value="Valider">
        </form>
        </body>
</html>
