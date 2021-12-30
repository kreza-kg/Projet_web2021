<div>

    <form action="index.php?Connexion" method="POST">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Pseudo" name="Pseudo" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
        <!-- <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p>Utilisateur ou mot de passe incorrect</p>";
        }
        ?> -->
    </form>
</div>

