<?php
session_start();
if($_SESSION['logged'] === true){
    if ($_POST['yes'] == "yes") {
        $_SESSION['logged'] = false;
        header('Location: index.php');
    }
    else{
        header('Location: index.php');
    }
}else{
    header('Location: index.php');
}
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
        <body>
        <form action="#" method="post" name="deco">
            <p>Voulez vous vous déconnecter ?</p>
            <input type="submit" value="Oui" name="yes">
        </form>
        </body>
</html>
