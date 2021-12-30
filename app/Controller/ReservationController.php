<?php


namespace app\Controller;

use app\model\ModelReservation;

class ReservationController
{
    private $model;
    //private $view;

    public function __construct()
    {
        $this->model=new ModelReservation();
    }

    public function Reservation($PseudoUser,$nomEvent){
        $this->model->ReservationEvent($PseudoUser,$nomEvent);
    }
}