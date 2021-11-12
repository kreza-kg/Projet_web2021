<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="../../Contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <link href="../../Contenu/Css/Main.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <nav id="nav_header">
        <div>
            <img id="logo" src="" alt="">
        </div>
        <ul id="onglet_header">
            <?php if(isset($_SESSION['Pseudo'])) :
                $user = $_SESSION['Pseudo'];
                ?>
                <p>Bonjour <?=$user;?>, vous êtes connecté</p>
                <div id="div_bouton">
                    <a href='../../index.php?deconnexion=true'>Déconnexion</a>
                    <?php if(isset($_GET['deconnexion']))
                    {
                        if($_GET['deconnexion']==true)
                        {
                            session_destroy();
                            header('Location: ../../index.php');
                        }
                    }?>
                </div>
            <?php else : ?>
                <div id="div_bouton">
                    <a href="../../View/Connection/login.php" class="button">Connexion</a>
                    <a href="../../View/Connection/register.php" class="button">S'enregistrer</a>
                </div>
            <?php endif;?>
        </ul>

    </nav>
</header>
</body>
</html>
