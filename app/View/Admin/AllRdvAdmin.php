<div class="admin-form-ext">
    <h2 class="titre_admin" >Gestion des rendez-vous : </h2>
    <div class="administration">

        <form action="index.php?administration" method="POST">
            <?php foreach($AllRdv as $key => $value): ?>
                <li>
                    <input type="checkbox" name="id_Reserv" value="<?=$value->id?>"> <?=$value->Pseudo?> / <?=$value-> event?>
                </li>
            <?php endforeach; ?>
            <p><input type="submit" name = "Supprimer" value="Supprimer" required/></p>
        </form>
    </div>
</div>
