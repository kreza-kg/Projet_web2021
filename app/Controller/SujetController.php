<?php


namespace app\Controller;

use app\model\ModelSujet;

class SujetController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelSujet();
    }

    public function menuAll()  {
        $content=$this->model->FindNotTab();
        include('app/view/Affichage/Menu.php');
    }

    public function SelectAllMenu(){
        $req1=$this->model->FindNotTab();
        include('app/view/Admin/administration.php');
    }
}