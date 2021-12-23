<?php
include('../../../app/config/Database.php');
$connexion = connexionBd();

$RequeteETP = "SELECT * FROM entreprise";
$info2=$connexion->query($RequeteETP );
$req1=$info2->fetchAll(PDO::FETCH_OBJ);


?>


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

