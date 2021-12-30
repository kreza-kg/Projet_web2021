<div>
    <h2>Gestion des articles : </h2>
    <form action="index.php?administration" method="POST">
        <?php foreach($AllArticlesNom as $key => $value): ?>
            <li>
                <input type="checkbox" name="id_article" value=" <?=$value->Id?>"> <?=$value->Nom?>
            </li>
        <?php endforeach; ?>
        <p><input type="submit" name = "Supprimer" value="Supprimer" required/></p>
    </form>
</div>
