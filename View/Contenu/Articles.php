<?php
//Faire passer la catégorie de l'article via l'url, puis faire affiché chacun des articles selon l'url.
// ---- une requete sql pour plusieurs pages disponible
// ---- Eventuellement faire affiché des "pub" pour prendre des rendez vous selon la catégorie.

include('Config/Database.php');
$connexion = connexionBd();

$idRecup = $_GET['id'];

$SqlArticles = "SELECT * FROM article WHERE id = .$idRecup";
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
<?php
// Importation footer (require)
require('View/Affichage/header.php');
?>
<div>
    <!-- Requete afin d'afficher tout les articles en fonction de leurs sujet-->
    <?php foreach($ReqArticles as $key => $value): ?>
        <article class="Article_principal">
            <h2><?=$value->nom?></h2>
            <h3><?=$value->Pseudo?></h3>
            <img src="<?=$value->img?>" alt="">
            <p><?=$value->contenu?></p>
            <p><?=$value->date?></p>
        </article>
    <?php endforeach; ?>

</div>
<?php
// Importation footer (require)
require('View/Affichage/footer.php');
?>
</body>
</html>
