<?php
// ---- une requete sql pour plusieurs pages disponible
// ---- Eventuellement faire affiché des "pub" pour prendre des rendez vous selon la catégorie.

include('../../../app/config/Database.php');
include('../../../app/config/utile.php');

$connexion = connexionBd();

$SujetRecup = $_GET['sujet'];

$SqlArticles = "SELECT * FROM article WHERE sujet = '$SujetRecup'";
$articles=$connexion->query($SqlArticles);
$ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>
<body>
<div>
    <?php
    // Importation header (require)
    require('../../../app/view/Affichage/header.php');
    ?>
</div>

<div>
    <!-- Requete afin d'afficher tout les articles en fonction de leurs sujet-->
    <?php foreach($ReqArticles as $key => $value): ?>
        <article class="Article_principal">
            <h2><?=$value->Nom?></h2>
            <h3><?=$value->Pseudo?></h3>
            <img name="ImgArticles" src="<?=$value->Img?>" alt="">
            <?php
            $ArticleCourt = tronquer_texte($value->Description); //fonction pour raccourcir la longueur de la description des articles
            ?>
            <p><?=$ArticleCourt?></p>
            <a href="articleComplet.php?ArticleNo=<?=$value->Id;?>">En savoir plus</a>

            <!--<p><?=$value->date?></p> -->
        </article>
    <?php endforeach; ?>

</div>
<div>
    <?php
    // Importation footer (require)
    require('../../../app/view/Affichage/footer.php');
    ?>
</div>

</body>
</html>
