<?php

include('../../../app/config/Database.php');

$connexion = connexionBd();

$ArticleRecup = $_GET['ArticleNo'];

$SqlArticles = "SELECT * FROM article WHERE id = '$ArticleRecup'";
$articles=$connexion->query($SqlArticles);
$ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <?php
    // Importation header (require)
    require('../../../app/view/Affichage/header.php');
    ?>
</div>

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
<div>
    <?php
    // Importation footer (require)
    require('../../../app/view/Affichage/footer.php');
    ?>
</div>

</body>
</html>
