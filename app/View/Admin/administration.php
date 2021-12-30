<div>
    <h2>Creation d'articles : </h2>

    <form action="index.php?administration" method="POST" enctype="multipart/form-data" >
        <fieldset>
            <legend>Ajout d'un article</legend>
            <p>
                <label>Nom</label>
                <input type="text" placeholder="nom" name="Nom" required>

                <label>Description</label>
                <input type="text" placeholder="Description" name="Description" required>

                <label> Sujet : </label>
                <select name="sujet" required>
                    <?php foreach($req1 as $key => $value): ?>
                        <option value="<?=$value->Nom?>"><?=$value->Nom?></option>
                    <?php endforeach; ?>
                </select>

            <p>
                <label for="fichier" >Images  </label>
                <input type="file"  name="img"  required/>
            </p>

        </fieldset>
        <p><input type="submit" name ="submit" value="submit" required/></p>
    </form>
</div>


