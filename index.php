<?php

include('app/config/Database.php');
/*if(isset($_COOKIE['Connection'])){
    $user_cookie = $_COOKIE['Connection'];
}else{
    header('Location: app/View/Homepage/homepage.php');
}*/
if(isset($_SESSION['Pseudo'])){
    $user = $_SESSION['Pseudo'];
}



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="app/Contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <link href="app/Contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<body>
<div>
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
                        $requete = "SELECT count(*) FROM admin where pseudo = '$user'";
                        $requete2=$connexion->query($requete);
                        $requete3=$requete2->fetch();
                        $count = $requete3['count(*)'];
                        ?>
                        <p>Bonjour <?=$user;?>, vous êtes connecté </p>
                        <div id="div_bouton">
                            <a href='../../../index.php?deconnexion=true'>Déconnexion</a>
                            <?php if(isset($_GET['deconnexion']))
                            {
                                if($_GET['deconnexion']==true)
                                {
                                    // si la personne veut se déconnecté elle appuie sur le bouton et cela la deconnecte
                                    session_destroy();
                                    header('Location: ../../index.php');
                                }
                            }?>
                        </div>
                        <?php if($count!=0) :
                        // Si une connexion a été effectué en tant qu'admin, accée a la page administration
                        ?>
                        <a href="/app/View/Admin/administration.php">Administration</a>
                    <?php endif;?>

                    <?php else : ?>
                        <!-- Si personne ne s'est connecté auparavant alors aucune session n'a été crée, il est donc possible de se créer un compte ou de se connecter -->
                        <div id="div_bouton">
                            <a href="/app/View/Connection/login.php" class="button">Connexion</a>
                            <a href="/app/View/Connection/register.php" class="button">S'enregistrer</a>
                        </div>
                    <?php endif;?>
                </ul>
            </nav>
        </div>
        <div>
            <nav id="menu_deroulant_principal">
                <ul id="ul_menu">
                    <li class="base_li_menu" ><a href="../../../index.php">Accueil</a></li>
                    <!-- Début du menu déroulant -->
                    <li class="base_li_menu"><a href="#">Science</a>
                        <ul>
                            <li class="menu_science_deroulant">
                                <!-- Boucle pour tout les éléments que la requete retourne, cela permet d'afficher les catégories du menu déroulant-->
                                <?php foreach($req1 as $key => $value): ?>
                                    <a href="../Contenu/Articles.php?Sujet=<?=$value->Nom;?>"><?=$value->Nom;?></a>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                    </li>
                    <li class="base_li_menu"><a href="#">Rendez-vous</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>

<div>
    <p id="extra">
        Projet TEA - Année 2021 / Maxence Guilbot - version HTML 5
    </p>
</div>

</body>
</html>
