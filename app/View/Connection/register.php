

<div class="container-login">

    <div class="login-form-ext">
        <form id="formulaire_login" action="index.php?enregistrement" method="POST">
            <h1 id="titre-form"> Inscription </h1>
            <div class="login-form-user">
                <label ><b>Nom</b></label>
                <input type="text" placeholder="nom" name="Nom" class="form-control input" required>

            </div>
            <div class="login-form-user">
                <label><b>Prenom</b></label>
                <input type="text" placeholder="Prenom" name="Prenom" class="form-control input" required>
            </div>

            <div class="login-form-user">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Pseudo" name="Pseudo" class="form-control input" required>
            </div>

            <div class="login-form-user">
                <label><b>Adresse email</b></label>
                <input type="email" placeholder="Mail" name="Mail" class="form-control input" required>
            </div>

            <div class="login-form-user">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="mot de passe" name="Password" class="form-control input" required>
            </div>

            <div class="btn-form-container">
                <input type="submit" value="S'inscrire" class="btn-form"/>
            </div>
        </form>

    </div>

</div>



