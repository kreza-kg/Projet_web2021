<?php


namespace app\Controller;


use app\model\ModelEvenement;

class EvenementsController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelEvenement();
    }

    public function GetAllEvents(){
        $AllEvents=$this->model->allEvents();
        include('app/View/Contenu/AllEvenements.php');
    }

    public function GetThisEvenement($nomEvent) {
        $nomEvent1=htmlspecialchars($_GET['Rdv']);
        $UnEvent=$this->model->ThisEvent($nomEvent);
        include('app/View/Contenu/ReservationEvent.php');
        return $UnEvent;


    }

}