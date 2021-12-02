<?php

if(isset($_COOKIE['Connection'])){
    $user_cookie = $_COOKIE['Connection'];
}else{
    header('Location: App/View/Homepage/homepage.php');
}


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
    <link href="App/Contenu/Css/Reset.css" rel="stylesheet" type="text/css">
    <link href="App/Contenu/Css/Main.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>
<body>
<?php
// Importation footer (require)
require('App/View/Affichage/header.php');
?>

<?php
// Importation footer (require)
require('App/View/Affichage/footer.php');
?>

</body>
</html>
