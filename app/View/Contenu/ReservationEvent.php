
<div>
    <?php foreach($UnEvent as $key => $value): ?>
        <form action="index.php" method="post">
            <h2> Reservation pour : <?=$value->nom;?> </h2>
            <img src="<?=$value->image;?>" alt="">
            <p>Etes vous sur de vouloir reserve pour le <?=$value->jour;?> a <?=$value->horaire;?></p>
            <p><input type="submit" name ="Reserver" value="Comfirmer" required/></p>
        </form>
    <?php endforeach; ?>
</div>
