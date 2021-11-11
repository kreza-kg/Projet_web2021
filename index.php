<?php
include('Config/Database.php');
$connexion = connexionBd();

/* if(!isset($_SESSION)){

              } */

// Requete pour selectionner les sujets pour le menu
$RequeteSujet = "SELECT * FROM sujet";
$info2=$connexion->query($RequeteSujet );
$req1=$info2->fetchAll(PDO::FETCH_OBJ);


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="../../Contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <link href="../../Contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<body>
<header>
    <?php
    // Importation footer (require)
    require('View/Affichage/header.php');
    ?>
    <div>
        <nav id="menu_deroulant_principal">
            <ul id="ul_menu">
                <li class="base_li_menu" ><a href="#">Accueil</a></li>
                <!-- Début du menu déroulant -->
                <li class="base_li_menu"><a href="#">Science</a>
                    <ul>
                            <li class="menu_science_deroulant">
                            <?php foreach($req1 as $key => $value): ?>
                                <a href="<?=$value->id?>"><?=$value->nom?></a>
                            <?php endforeach; ?>
                            </li>
                    </ul>
                </li>
                <li class="base_li_menu"><a href="#">Rendez-vous</a></li>
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
