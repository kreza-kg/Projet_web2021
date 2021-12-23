<?php


namespace app\Model;

use \app\entity\users;
use \app\model\Model;

class ModelUsers extends Model
{
    public function __construct()
    {
        $this->users="users";
        parent::__construct($this->users);
    }


    public function findAll() : array {

        $arrayVille=$this->find();
        $newTab=array();

        foreach ($arrayVille as $unUser){
            $newTab[]=new users($unUser);
        }
        return $newTab;
    }


    public function findAllApi() : array {
        $arrayUsers=$this->find();

        return $arrayUsers;

    }


    public function findOne($id) : users{
        $data=$this->read($id);

        //var_dump($data);

        return new users($data);
    }

    public function saveVille($data) : int {

        return $this->save($data);

    }


    public function nbUsers() : int{
        return count($this->findAll());
    }




}