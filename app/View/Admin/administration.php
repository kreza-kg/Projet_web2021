<div class="admin-form-ext">

    <h2 class="titre_admin" >Creation d'articles : </h2>

    <div class="administration">

        <form action="index.php?administration" method="POST" enctype="multipart/form-data" class="admin-form-int" >
            <fieldset id="fieldset_article">
                <legend>Ajout d'un article</legend>

                <div class="admin-form-user">
                    <label>Nom</label>
                    <input type="text" placeholder="nom" name="Nom" required class="form-control input" >

                </div>

                <div class="admin-form-user">
                    <label>Description</label>
                    <input type="text" placeholder="Description" name="Description" required class="form-control input" >
                </div>

                <div class="admin-form-user">
                    <label> Sujet : </label>
                    <select name="sujet" required>
                        <?php foreach($req1 as $key => $value): ?>
                            <option value="<?=$value->Nom?>"><?=$value->Nom?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="admin-form-user">
                    <label for="fichier" >Images  </label>
                    <input type="file"  name="img"  required/>
                </div>

                <div class="admin-form-user">
                    <input type="submit" name ="submit" value="submit" class="btn-form" required/>
                </div>

            </fieldset>

        </form>
    </div>
</div>


