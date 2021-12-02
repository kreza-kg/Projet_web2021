<?php
/* ajouter un cookie qui permet de rediriger vers cette page si c'est la premiere connection */
/* faire un systeme de changement de langue | mettre en place a la fin du projet */
/* pour ce faire il faudrait mettre un bouton pour switch la langue, puis une condition $_GET[lang] */

setcookie("Connection",time()+60*60*24);



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
<div></div>
<div id="div_homepage">
    <div id="div_entre">
        <a href="../../../index.php" class="button">Acces</a>
    </div>

</div>

</body>
</html>
