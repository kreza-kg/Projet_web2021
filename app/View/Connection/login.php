<?php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../Contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <title>Home</title>
</head>
<body>
<div>

    <form action="verification.php" method="post">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Pseudo" name="Pseudo" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
</body>
</html>
