<?php


namespace app\model;


use app\config\Database;
use \PDO;
use App\Entity\article;


class ModelArticle extends Model
{
    private \PDO $connexion;

    public function __construct()
    {
        $this->article="article";
        $db = new Database();
        $this->connexion=$db->connexionBd();
        parent::__construct($this->article);
    }

    public function findOne($id) : article{
        $data=$this->read($id);
        return new article($data);
    }


    public function FindNotTab()
    {
        $SqlArticles = "Select * FROM article";
        $articles=$this->connexion->query($SqlArticles);
        $ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);
        return $ReqArticles;
    }

    public function allArticlesSujet($nom) : array
    {
        $sql="SELECT * FROM article WHERE Sujet = '$nom'";
        $retour=$this->connexion->query($sql);
        $content=$retour->fetchall(PDO::FETCH_OBJ);
        return $content;
    }

    public function GetOneArticle($id) : array
    {
        $sql=" SELECT * FROM article WHERE Id='$id' ";
        $retour=$this->connexion->query($sql);
        $content=$retour->fetchall(PDO::FETCH_OBJ);
        return $content;
    }

}