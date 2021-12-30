<?php


namespace app\model;


use app\config\Database;
use \PDO;
use \app\entity\evenements;
use \app\model\Model;

class ModelEvenement extends Model
{

    private \PDO $connexion;

    public function __construct()
    {
        $this->evenements="evenements";
        $db = new Database();
        $this->connexion=$db->connexionBd();
        parent::__construct($this->evenements);
    }

    public function allEvents() : array
    {
        $sql="SELECT * FROM evenements" ;
        $retour=$this->connexion->query($sql);
        $content=$retour->fetchall(PDO::FETCH_OBJ);
        return $content;
    }

    public function ThisEvent($nomEvent) : array {
        $sql="SELECT * FROM evenements WHERE nom = '$nomEvent'";
        $retour=$this->connexion->query($sql);
        $content=$retour->fetchAll(PDO::FETCH_OBJ);
        return $content;

    }

}