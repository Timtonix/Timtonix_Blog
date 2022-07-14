<?php
session_start();
if ($_SESSION['logged'] == true) {
    ?>
        <html>
            <head>
                <meta charset="utf-8">
            </head>
                <body>
                <form action="#" method="post">
                    <input type="text" name="title" placeholder="Titre">
                    <input type="text" name="content" placeholder="Contenu">
                    <input type="submit" value="Valider">
                </form>
                </body>
        </html>
    <?php
}
else{
    header('Location: index.php?error=1');
}
