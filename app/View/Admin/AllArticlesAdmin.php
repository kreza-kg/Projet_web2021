<div class="admin-form-ext">
    <h2 class="titre_admin" >Gestion des articles : </h2>
    <div class="administration">

        <form action="index.php?administration" method="POST">
            <?php foreach($AllArticlesNom as $key => $value): ?>
                <li>
                    <input type="checkbox" name="id_article" value=" <?=$value->Id?>"> <?=$value->Nom?>
                </li>
            <?php endforeach; ?>
            <p><input type="submit" name = "Supprimer" value="Supprimer" required/></p>
        </form>
    </div>

</div>
