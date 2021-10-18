<?php
define("SERVEUR","localhost");
define("USER","user");
define("MDP","user");
define("BD","");

function connexionBd(){
    try  {
        $connexion= new PDO('mysql:host='.SERVEUR.';dbname='.BD, USER, MDP);
        $connexion->exec("SET CHARACTER SET utf8");
        return $connexion;
    }

    catch(Exception $e)
    {        echo 'Erreur : '.$e->getMessage().'<br />';       echo 'N° : '.$e->getCode();
    }
}

?>