<?php

namespace app\model;

use App\Config\Database;
use \PDO;



class Model{

    protected string $table;

    private \PDO $connexion;



    public function __construct( ){

        $db = new Database();
        $this->connexion=$db->connexionBd();
    }



    public function read($id) : array
    {

        $sql="SELECT * FROM ".$this->table." WHERE id=".$id;

        $retour=$this->connexion->query($sql);
        $content=$retour->fetch(PDO::FETCH_ASSOC);

        return $content;

    }




    public function find($data=array()) : array
    {

        /*$conditions="1";
        $fields="*";
        $limit="";
        $order=$this->table.".id DESC";
        $othertable="";
        if(isset($data["conditions"])){$conditions=$data["conditions"];}
        if(isset($data["fields"])){$fields=$data["fields"];}
        if(isset($data["limit"])){$limit="LIMIT".$data["limit"];}
        if(isset($data["order"])){$order=$data["order"];}
        if(isset($data["othertable"])){$othertable=','.$data["othertable"];}


        $sql="SELECT $fields FROM ". $this->table." ".$othertable." WHERE $conditions ORDER BY $order $limit";*/

        $sql = "Select * FROM " . $this->table;

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









}