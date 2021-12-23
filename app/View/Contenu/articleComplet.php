<?php

include('../../../app/config/Database.php');

$connexion = connexionBd();

$ArticleRecup = $_GET['ArticleNo'];

$SqlArticles = "SELECT * FROM article WHERE id = '$ArticleRecup'";
$articles=$connexion->query($SqlArticles);
$ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);
?>


<div>
    <!-- Requete afin d'afficher l'article ciblé-->
    <?php foreach($ReqArticles as $key => $value): ?>
        <article class="Article_Complet">
            <h2><?=$value->Nom?></h2>
            <h3><?=$value->Pseudo?></h3>
            <img name="ImgArticlesComplet" src="<?=$value->Img?>" alt="">
            <p><?=$value->Description?></p>
            <!--<p><?=$value->date?></p> -->
        </article>
    <?php endforeach; ?>
</div>
