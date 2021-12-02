<?php
session_start();
include('../../Config/Database.php');
$connexion = connexionBd();


if(isset($_POST['Pseudo']) && isset($_POST['password']))
{

    $Pseudo = htmlspecialchars($_POST['Pseudo']);
    $password = htmlspecialchars($_POST['password']);

    if($Pseudo !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
              Pseudo = '".$Pseudo."' and password = '".$password."' ";
        $requete2=$connexion->query($requete);

        $req1=$requete2->fetch();
        $count = $req1['count(*)'];
        if($count!=0)
        {
            $_SESSION['Pseudo'] = $Pseudo;
            header('Location: ../../../index.php');
        }
        else
        {
            header('Location: login.php?erreur=1');
        }
    }
    else
    {
        header('Location: login.php?erreur=2');
    }
}
else
{
    header('Location: login.php');
}
?>
