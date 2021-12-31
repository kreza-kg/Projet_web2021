<?php
session_start();
use app\Controller\ArticleController;
use app\Controller\UsersController;
use app\Controller\SujetController;
use app\Controller\AdminController;
use app\Controller\ReservationController;
use app\Controller\EvenementsController;


if(isset($_SESSION['Pseudo'])){
    $user = $_SESSION['Pseudo'];
}

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

$CA = new ArticleController();
$CU = new UsersController();
$CS = new SujetController();
$CAdmin = new AdminController();
$CE = new EvenementsController();
$CR = new ReservationController();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="app/Contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<body>
<div id="body_header">
    <header>
        <div>
            <nav id="nav_header">
                <div>
                    <img id="logo" src="" alt="">
                </div>
                <ul id="onglet_header">
                    <?php if(isset($_SESSION['Pseudo'])) :
                        // Si une connexion a été effectué la session prend le pseudo de la personne connecté
                        $user = $_SESSION['Pseudo'];
                        /*$adminNb = $CU->nbAdminUser($user);*/
                        ?>

                        <div id="div_bouton">
                            <a href='index.php?deconnexion=true' class="button">Déconnexion</a>
                            <?php if(isset($_GET['deconnexion']))
                            {
                                if($_GET['deconnexion']==true)
                                {
                                    // si la personne veut se déconnecté elle appuie sur le bouton et cela la deconnecte
                                    session_destroy();
                                    header('Location: index.php');
                                }
                            }?>

                    <?php else : ?>
                        <!-- Si personne ne s'est connecté auparavant alors aucune session n'a été crée, il est donc possible de se créer un compte ou de se connecter -->
                        <div id="div_bouton">
                            <a href="index.php?Connexion" class="button">Connexion</a>
                            <a href="index.php?enregistrement" class="button">S'enregistrer</a>
                        </div>
                    <?php endif;?>
                </ul>
            </nav>
        </div>
        <div id="div_menu_princ">
            <nav id="menu_deroulant_principal">
                <ul id="ul_menu">
                    <li class="base_li_menu" ><a href="index.php">Accueil</a></li>
                    <!-- Début du menu déroulant -->
                    <li class="base_li_menu"><a href="index.php?Science">Science</a>
                        <ul id="menu">
                            <li class="menu_science_deroulant">
                                <!-- Boucle pour tout les éléments que la requete retourne, cela permet d'afficher les catégories du menu déroulant-->
                                <?php
                                    $CS->menuAll();
                                ?>
                            </li>
                        </ul>
                    </li>
                    <li class="base_li_menu"><a href="index.php?ListEvenements">Evenements</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>
<div>
    <?php if(empty($_GET)): ?>
        <nav id="nav_welcome">
            <h2 id="Welcome"> Bienvenue ! </h2>
            <p id="agicheur">Retrouver toute l'actualité du monde scientifique</p>
        </nav>
        <nav id="nav_Phy" class="nav_home">
            <h3 class="titre_home" id="titre_Physique">Physique</h3>
            <p class="para_home" id="para_physique" >La partie physique regroupe toute science qui étudie le comportement ou qui, du moins essaye de comprendre et d'expliquer tout phénomène naturel.
                Ici comprendront toutes nouvelles découvertes sur ces lois, ces formes, ces variables ainsi que son évolution !</p>
        </nav>
        <nav id="nav_astro" class="nav_home">
            <h3 class="titre_home" id="titre_astro" >L'astronomie</h3>
            <p class="para_home" id="para_astro" >L'astronomie quant à elle est la science de l'observation des astres, la recherche de leur origine, de leurs propriétés.
                Cette science est la plus ancienne reconnue, de nombreuses religions ont été fondée dues au manque de connaissances ce qui la rend la plus difficile à cerner.
                Pour étudier cette science, les scientifiques la distinguent comme deux parties, la science de l'observation ainsi que la science de l'astronomie théorique.</p>
        </nav>
        <nav id="nav_Sci" class="nav_home">
            <h3 class="titre_home" id="titre_Sci" >Science-Fi</h3>
            <p class="para_home" id="para_Sci" >Dans la partie science-fiction nous allons nous plonger dans le coeur des articles les plus futuristes qui soit.
                Nous allons donc découvrir d'éventuelle observation future et espérance pour le bien commun.</p>
        </nav>
    <?php endif; ?>

    <?php

    if (isset($_GET['administration'])) {
        if(isset($_SESSION['Pseudo']) && (($_SESSION['Pseudo']) === 'Kreza')){
            $CS->SelectAllMenu();
            $CAdmin->getAllArticlesAdmin();
            $CAdmin->getAllUsersAdmin();
            $CAdmin->getAllRDVAdmin();
            if (isset($_POST['submit'])){
                $valideExt = array('.jpg','.jpeg','.gif','.png');
                $fichName = $_FILES['img']['name'];
                $tmpName = $_FILES['img']['tmp_name'];
                $fileSize = $_FILES['img']['size'];

                $fileExt = ".".strtolower(substr(strrchr($fichName,'.'),1));

                if($_FILES['img']['error'] > 0){
                    header('Location: index.php?ajout=error');
                    die();
                }
                if(!in_array($fileExt,$valideExt)){
                    header('Location: index.php?ajout=noImg');
                    die();
                }

                $uniqueName = md5(uniqid(rand(),true));
                $file = "app/Contenu/Images/" . $uniqueName . $fileExt;
                $envoie = move_uploaded_file($tmpName,$file);


                if ($envoie) {
                    $Nom = htmlspecialchars($_POST['Nom']);
                    $Description = htmlspecialchars($_POST['Description']);
                    $Sujet = htmlspecialchars($_POST['sujet']);
                    $user = $_SESSION['Pseudo'];

                    $CAdmin->CreationArticleAdmin($Nom, $Description, $file, $Sujet, $user);
                }
            }
            if (isset($_POST['id_article'])){
                $idASupp = htmlspecialchars($_POST['id_article']);
                $CAdmin->SupprimerArticle($idASupp);
            }
            if (isset($_POST['id_User'])){
                $idUser = htmlspecialchars($_POST['id_User']);
                $CAdmin->SupprimerUser($idUser);
            }
            if (isset($_POST['id_Reserv'])){
                $idReserv = htmlspecialchars($_POST['id_Reserv']);
                $CAdmin->SupprimerReserv($idReserv);
            }

        }else{
            header('index.php');
        }

    }
    if(isset($_GET['ListEvenements'])){
        $CE->GetAllEvents();
    }
    if(isset($_GET['Rdv'])){
        $nomEvent=htmlspecialchars($_GET['Rdv']);
        $CE->GetThisEvenement($nomEvent);

        if((!empty($_SESSION['Pseudo']) && isset($_SESSION['Pseudo']))) {
            $PseudoUser = htmlspecialchars($_SESSION['Pseudo']);
            $CR->Reservation($PseudoUser,$nomEvent);
        }
    }

    if(isset($_GET['Sujet'])){
        $nom=htmlspecialchars($_GET['Sujet']);
        $CA->GetAllArtCat($nom);
    }else if(isset($_GET['Science'])){
        $CA->getAllArticles();
    }
    if(isset($_GET['SujetN°'])){
        $id=htmlspecialchars($_GET['SujetN°']);
        $CA->FindOneArticle($id);
    }
    if(isset($_GET['Connexion'])) {
        if (isset($_POST['Pseudo']) && isset($_POST['password'])) {

            $Pseudo = htmlspecialchars($_POST['Pseudo']);
            $password = htmlspecialchars($_POST['password']);
            $CU->ConnectionUser($Pseudo, $password);
            header('Location: index.php');

        }else{
            $CU->acceeConnection();
        }
    }

    if (isset($_GET['enregistrement'])) {
        if((isset($_POST['Nom']) && !empty($_POST['Nom'])) && (isset($_POST['Prenom']) && !empty($_POST['Prenom'])) && (isset($_POST['Pseudo']) && !empty($_POST['Pseudo'])) &&
            (isset($_POST['Mail']) && !empty($_POST['Mail'])) && (isset($_POST['Password']) && !empty($_POST['Password'])))
        {
            $Nom = htmlspecialchars($_POST['Nom']);
            $Prenom = htmlspecialchars($_POST['Prenom']);
            $Pseudo = htmlspecialchars($_POST['Pseudo']);
            $Mail = htmlspecialchars($_POST['Mail']);
            $Password = htmlspecialchars($_POST['Password']);


            $CU->enregistrerCompte($Pseudo, $Nom,$Prenom,$Mail,$Password );
            header('Location: index.php');

        }else{
            $CU->acceeFormulaire();
        }
    }
    ?>
</div>
<div>
    <footer>
        <div>
            <p id="extra">
                Projet TEA - Année 2021 / Maxence Guilbot - version HTML 5
            </p>
        </div>
    </footer>
</div>


</body>
</html>
