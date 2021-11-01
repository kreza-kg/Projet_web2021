<?php
include('Config/Database.php');
$connexion = connexionBd();

if(!isset($_SESSION)){
    header("location:homepage.php");
}

//**** Requete ****/

$RequeteSujet = 'SELECT * FROM sujets';
$info2=$connexion->query($RequeteSujet );
$req1=$info2->fetchALL();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./Contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
<header>
    <?php
    // Importation footer (require)
    require('View/Affichage/header.php');
    ?>
    <div>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <!-- Début du menu déroulant -->
                <li><a href="#">Science</a>
                    <ul>
                        <?php foreach($req1 as $key ):?>
                            <li><a href="<?=$key;?>"><?=$key;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="#">Rendez-vous</a></li>
            </ul>
        </nav>
    </div>
</header>
<div></div>
<footer>
    <?php
    // Importation footer (require)
    require('View/Affichage/footer.php');
    ?>
</footer>
</body>
</html>
