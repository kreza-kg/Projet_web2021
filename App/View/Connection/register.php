<?php
session_start();
include('../../../App/Config/Database.php');
$connexion = connexionBd();

if((isset($_POST['Nom']) && !empty($_POST['Nom'])) && (isset($_POST['Prenom']) && !empty($_POST['Prenom'])) && (isset($_POST['Pseudo']) && !empty($_POST['Pseudo'])) &&
(isset($_POST['Mail']) && !empty($_POST['Mail'])) && (isset($_POST['Password']) && !empty($_POST['Password'])))
{
    $Nom = htmlspecialchars($_POST['Nom']);
    $Prenom = htmlspecialchars($_POST['Prenom']);
    $Pseudo = htmlspecialchars($_POST['Pseudo']);
    $Mail = htmlspecialchars($_POST['Mail']);
    $Password = htmlspecialchars($_POST['Password']);

    $sql = $connexion->prepare("INSERT INTO users ( Pseudo, nom, prenom, mail, password, id ) VALUES (:Pseudo, :Nom, :Prenom,:Mail,:Password, null)");
    $sql->bindParam(':Nom', $Nom);
    $sql->bindParam(':Prenom', $Prenom);
    $sql->bindParam(':Pseudo', $Pseudo);
    $sql->bindParam(':Mail', $Mail);
    $sql->bindParam(':Password', $Password);

    $sql->execute();
    header('Location: ../../../index.php');
    $_SESSION['Pseudo'] = $Pseudo;

}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enregistrement</title>
</head>
<body>
<div>
    <form action="register.php" method="post">
        <label><b>Nom</b></label>
        <input type="text" placeholder="nom" name="Nom" required>

        <label><b>Prenom</b></label>
        <input type="text" placeholder="Prenom" name="Prenom" required>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Pseudo" name="Pseudo" required>

        <label><b>Adresse email</b></label>
        <input type="email" placeholder="Mail" name="Mail" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="mot de passe" name="Password" required>

        <input type="submit" value="S'inscrire"/>
    </form>
</div>
</body>
</html>
