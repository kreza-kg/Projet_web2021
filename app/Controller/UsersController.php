<?php

namespace app\Controller;

use app\model\ModelUsers;

class UsersController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelUsers();
    }

    /*public function nbAdminUser($user) : int {
        $content=$this->model->nbAdmin($user);
        return $content;
    }*/

    public function enregistrerCompte($Pseudo, $Nom,$Prenom,$Mail,$Password ){
        $this->model->CreeCompte($Pseudo, $Nom,$Prenom,$Mail,$Password );
        $_SESSION['Pseudo'] = $Pseudo;
    }

    public function acceeFormulaire(){
        include('app/View/Connection/register.php');
    }

    public function ConnectionUser($Pseudo, $password){
        $this->model->ConnectionU($Pseudo, $password);
        $_SESSION['Pseudo'] = $Pseudo;

    }

    public function acceeConnection(){
        include('app/View/Connection/login.php');
    }

    public function acceeAdmin(){
        include('app/View/Admin/administration.php');
    }


}