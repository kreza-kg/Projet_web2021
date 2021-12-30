<?php


namespace app\Controller;


use app\model\ModelAdmin;

class AdminController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelAdmin();
    }

    public function getOne($id){

        $content=$this->model->findOne($id);
        include('app/view/Contenu/articleComplet.php');
    }

    public function getAllArticlesAdmin(){
        $AllArticlesNom=$this->model->FindNotTabAdmin();
        include ('app/View/Admin/AllArticlesAdmin.php');
    }

    public function getAllUsersAdmin(){
        $AllUsersNom=$this->model->FindNotTabUsers();
        include ('app/View/Admin/AllUsersAdmin.php');
    }



    public function CreationArticleAdmin($Nom,$Description,$file,$Sujet,$user){
        $this->model->CreationArticle($Nom,$Description,$file,$Sujet,$user);

    }

    public function SupprimerArticle($idASupp){
        $this->model->supprimerAdmin($idASupp);


    }

    public function SupprimerUser($idUser){
        $this->model->supprimerUserAdmin($idUser);

    }
    public function SupprimerReserv($idReserv){
        $this->model->supprimerReservationAdmin($idReserv);

    }




}