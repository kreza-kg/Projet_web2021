<div class="container-login">

    <div class="login-form-ext">
        <form class="login-form-int" action="index.php?Connexion" method="POST">
            <h1 id="titre-form" >Connexion</h1>

            <div class="login-form-user">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Pseudo" name="Pseudo" id="inputUsername" class="form-control input" required>

            </div>
            <div class="login-form-user">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="mot de passe" name="password" id="inputPassword" class="form-control input" required>
            </div>

            <div class="btn-form-container">
                <input type="submit" id='submit'  class="btn-form" value='LOGIN' >
            </div>

            <!-- <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p>Utilisateur ou mot de passe incorrect</p>";
            }
            ?> -->
        </form>
    </div>

</div>

