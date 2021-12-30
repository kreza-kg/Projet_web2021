<?php


namespace app\Model;

use app\config\Database;
use \PDO;
use \app\entity\users;
use \app\model\Model;

class ModelUsers extends Model
{
    private $Compte;

    private \PDO $connexion;

    public function __construct()
    {
        $this->users="users";
        $db = new Database();
        $this->connexion=$db->connexionBd();
        parent::__construct($this->users);
    }

    public function findOne($id) : users{
        $data=$this->read($id);

        return new users($data);
    }

    /*public function nbAdmin($user) : int{
        $Nombre = count($this->nbUsers($user));
        return $Nombre;
    }*/

    public function CreeCompte($Pseudo, $Nom,$Prenom,$Mail,$Password ) :void
    {
        $sql ="INSERT INTO users ( Pseudo, nom, prenom, mail, password, id ) VALUES ('$Pseudo',' $Nom', '$Prenom','$Mail','$Password', null)";
        $resultatInsertion = $this->connexion->exec($sql);
    }

    public function  ConnectionU($Pseudo, $password){
        if(isset($_POST['Pseudo']) && isset($_POST['password']))
        {

            $Pseudo = htmlspecialchars($_POST['Pseudo']);
            $password = htmlspecialchars($_POST['password']);

            if($Pseudo !== "" && $password !== "")
            {
                $requete = "SELECT count(*) FROM users where 
              Pseudo = '".$Pseudo."' and password = '".$password."' ";
                $requete2=$this->connexion->query($requete);

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
    }

}