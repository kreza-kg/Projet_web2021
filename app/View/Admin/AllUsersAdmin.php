<div>
    <h2>Gestion des membres : </h2>
    <form action="index.php?administration" method="POST">
        <?php foreach($AllUsersNom as $key => $value): ?>
            <li>
                <input type="checkbox" name="id_Reserv" value=" <?=$value->id?>"> <?=$value->Pseudo?>
            </li>
        <?php endforeach; ?>
        <p><input type="submit" name = "Supprimer" value="Supprimer" required/></p>
    </form>
</div>