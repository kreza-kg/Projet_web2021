<?php

include('app/config/Database.php');
/*if(isset($_COOKIE['Connection'])){
    $user_cookie = $_COOKIE['Connection'];
}else{
    header('Location: app/view/Homepage/homepage.php');
}*/
if(isset($_SESSION['Pseudo'])){
    $user = $_SESSION['Pseudo'];
}



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="app/contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <link href="app/contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<body>
<div>
    <?php
    // Importation footer (require)
    require('app/view/Affichage/header.php');
    ?>
</div>

<div>
    <?php
    // Importation footer (require)
    require('app/view/Affichage/footer.php');
    ?>
</div>

</body>
</html>
