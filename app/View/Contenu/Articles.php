<?php
include('app/config/utile.php');
?>


<div>
    <!-- Requete afin d'afficher tout les articles en fonction de leurs sujet-->
     <?php foreach($ReqArticles as $key => $value): ?>
        <article class="Article_principal">
            <h2><?=$value->Nom?></h2>
            <h3><?=$value->Pseudo?></h3>
            <img id="ImgArticles" src="<?=$value->Img?>" alt="">
            <?php
            $ArticleCourt = tronquer_texte($value->Description); //fonction pour raccourcir la longueur de la description des articles
            ?>
            <p><?=$ArticleCourt?></p>
            <a href="index.php?SujetN°=<?=$value->Id;?>">En savoir plus</a>
            <!--<p><?=$value->date?></p> -->
        </article>
 <?php endforeach; ?>


</div>
