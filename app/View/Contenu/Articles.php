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
