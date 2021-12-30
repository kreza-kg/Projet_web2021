<?php

namespace app\model;

use app\config\Database;
use App\Entity\sujet;


use \PDO;

class ModelSujet extends Model
{
    private \PDO $connexion;

    public function __construct()
    {
        $db = new Database();
        $this->connexion=$db->connexionBd();
        $this->sujet="sujet";
        parent::__construct($this->sujet);
    }

    public function FindNotTab()
    {

        $SqlArticles = "Select * FROM sujet ";
        $articles=$this->connexion->query($SqlArticles);
        $ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);

        return $ReqArticles;

    }


}