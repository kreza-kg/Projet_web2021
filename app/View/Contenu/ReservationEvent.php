<div class="container-login">
    <div class="reserv-form-ext">
        <?php foreach($UnEvent as $key => $value): ?>
            <form action="index.php" class="login-form-int" method="post">
                <h2 id="titre-revers"> Reservation : <?=$value->nom;?> </h2>
                <img src="<?=$value->image;?>" id="image_reservation" alt="">
                <p>Etes vous sur de vouloir reserve pour le <?=$value->jour;?> a <?=$value->horaire;?></p>
                <p><input type="submit" name ="Reserver" value="Comfirmer" required/></p>
            </form>
        <?php endforeach; ?>
    </div>
</div>
