<?php

$connexion = connexionBd();

$user = $_SESSION['Pseudo'];
$requete = "SELECT * FROM users where pseudo = '$user'";
$requete2=$connexion->query($requete);
$requete3=$requete2->fetch();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
