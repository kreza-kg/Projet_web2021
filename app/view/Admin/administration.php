<?php
include('../../../app/config/Database.php');
$connexion = connexionBd();

if(isset($_SESSION['Pseudo'])){
    $user = $_SESSION['Pseudo'];
}

$RequeteSujet = "SELECT * FROM sujet";
$info2=$connexion->query($RequeteSujet );
$req1=$info2->fetchAll(PDO::FETCH_OBJ);

if((isset($_POST['Nom']) && !empty($_POST['Nom'])) && (isset($_POST['Description']) && !empty($_POST['Description'])) && (isset($_POST['Img']) && !empty($_POST['Img'])) &&
    (isset($_POST['sujet']) && !empty($_POST['sujet'])) && (isset($_FILES['Img']) && !empty($_FILES['Img'])))
{
    $Nom = htmlspecialchars($_POST['Nom']);
    $Description = htmlspecialchars($_POST['Description']);
    $Sujet = htmlspecialchars($_POST['sujet']);

    $tmpName = $_FILES['Img']['tmp_name'];
    $name = $_FILES['Img']['name'];
    $size = $_FILES['Img']['size'];
    $error = $_FILES['Img']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];

    if(in_array($extension, $extensions)){
        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg
        move_uploaded_file($tmpName, '../../../app/contenu/Images/'.$file);
    }
    else{
        echo "Une erreur est survenue";
    }

    $admin_sql = $connexion->prepare("INSERT INTO article ( Id, Nom, Description, Img, sujet, Pseudo ) VALUES (null , ? , ? , ? , ? , ?)");
    $admin_sql->execute([$Nom, $Description, $file, $Sujet, $user]);

    //$admin_sql->bindParam(':Nom', $Nom);
    //$admin_sql->bindParam(':Description', $Description);
    //$admin_sql->bindParam(':file', $file);
    //$admin_sql->bindParam(':sujet', $sujet);
    //$admin_sql->bindParam(':Pseudo', $user);
    //$admin_sql->execute();
    header('Location: administration.php');
}

?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <h2>Creation d'articles : </h2>

    <form action="administration.php" method="post" enctype="multipart/form-data">
        <label><b>Nom</b></label>
        <input type="text" placeholder="nom" name="Nom" required>

        <label><b>Description</b></label>
        <input type="text" placeholder="Description" name="Description" required>

        <label><b>Img</b></label>
        <input type="file" placeholder="Img" name="Img">

        <label><b>Sujet</b></label>
        <?php foreach($req1 as $key => $value): ?>
            <input type="checkbox" name="Sujet" value=" <?=$value->Nom?>"> <?=$value->Nom?>
        <?php endforeach; ?>

        <input type="submit" value="Ajouter un article"/>
    </form>
</div>
<div>
    <h2>Gestion des membres : </h2>
</div>
<div>
    <h2>Gestion des rendez-vous : </h2>
</div>

</body>
</html>
