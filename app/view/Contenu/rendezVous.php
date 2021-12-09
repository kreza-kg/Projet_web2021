<?php
include('../../../app/config/Database.php');
$connexion = connexionBd();

$RequeteETP = "SELECT * FROM entreprise";
$info2=$connexion->query($RequeteETP );
$req1=$info2->fetchAll(PDO::FETCH_OBJ);


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
    <form action="rendezVous.php" method="post">

        <label><b>Entreprise</b></label>
        <?php foreach($req1 as $key => $value): ?>
            <input type="checkbox" name="etp" value=" <?=$value->Nom?>"> <?=$value->Nom?>
        <?php endforeach; ?>

        <label><b>Nombre</b></label>
        <input type="text" placeholder="Nombre" name="Nombre" required>

        <label><b>Horaires</b></label>
        <input type="datetime-local" placeholder="Horaire" name="Nombre" required>

        <input type="submit" value="Prendre rendez-vous"/>
    </form>
</div>
</body>
</html>
