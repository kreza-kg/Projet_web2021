<?php


namespace app\model;

use \PDO;
use app\config\Database;
use App\Entity\admin;
use App\Entity\article;

class ModelAdmin extends Model
{
    private \PDO $connexion;

    public function __construct()
    {
        $db = new Database();
        $this->connexion=$db->connexionBd();
        $this->admin="admin";
        parent::__construct($this->admin);
    }

    public function findOne($id) : admin{
        $data=$this->read($id);
        return new admin($data);
    }

    public function CreationArticle($Nom,$Description,$file,$Sujet, $user)
    {
        $admin_sql = "INSERT INTO article ( Id, Nom, Description, Img, sujet, Pseudo ) VALUES (null , '$Nom','$Description','$file' , '$Sujet' , '$user')";
        $this->connexion->exec($admin_sql);

    }

    public function FindNotTabAdmin()
    {
        $SqlArticles = "Select * FROM article";
        $articles=$this->connexion->query($SqlArticles);
        $ReqArticles=$articles->fetchAll(PDO::FETCH_OBJ);
        return $ReqArticles;
    }

    public function supprimerAdmin($idASupp){
        $SqlSupp="Delete FROM article where Id = '$idASupp'";
        $this->connexion->exec($SqlSupp);
    }

    public function supprimerUserAdmin($idUser){
        $SqlSupp="Delete FROM users where Id = '$idUser'";
        $this->connexion->exec($SqlSupp);
    }

    public function supprimerReservationAdmin($idReserv){
        $SqlSupp="Delete FROM reservation where id = '$idRserv'";
        $this->connexion->exec($SqlSupp);
    }

    public function FindNotTabUsers()
    {
        $SqlArticles = "Select * FROM users";
        $users=$this->connexion->query($SqlArticles);
        $Requsers=$users->fetchAll(PDO::FETCH_OBJ);
        return $Requsers;
    }

}