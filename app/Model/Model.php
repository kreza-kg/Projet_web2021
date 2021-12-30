<?php

namespace app\model;

use App\Config\Database;
use \PDO;



class Model{

    protected String $table = "" ;

    private \PDO $connexion;

    public function __construct( ){

        $db = new Database();
        $this->connexion=$db->connexionBd();
    }

    public function read($id) : array
    {

        $sql=" SELECT * FROM ".$this->table." WHERE Id= ".$id;

        $retour=$this->connexion->query($sql);
        $content=$retour->fetchAll(PDO::FETCH_ASSOC);

        return $content;

    }

    public function find($data=array()) : array
    {

        $sql = "Select * FROM " .$this->table;
        $prepa=$this->connexion->prepare($sql);
        $prepa->execute();
        $data=$prepa->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }


    public function save($data) : int {

        $sql="INSERT INTO ".$this->table."(";
        foreach ($data as $key => $value) {
            unset($data["id"]);
            $sql.="`$key`,";
        }

        $sql=substr($sql,0,-1);
        $sql.=" ) VALUES (";
        foreach ($data as $key => $value) {
            if(is_numeric($value))  $sql.=$value.",";
            else
                $sql.="'$value',";
        }
        $sql=substr($sql,0,-1);
        $sql.=" )";

        $retour=$this->connexion->exec($sql);

        return $retour;
    }

    public function allArticlesSujet($nom) : array
    {

        $sql="SELECT * FROM ".$this->table." WHERE Sujet = '$nom'";

        $retour=$this->connexion->query($sql);
        $content=$retour->fetch(PDO::FETCH_ASSOC);

        return $content;

    }

}