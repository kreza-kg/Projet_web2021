<?php


namespace app\model;


use app\config\Database;
use \PDO;
use \app\entity\reservation;
use \app\model\Model;

class ModelReservation extends Model
{
    private \PDO $connexion;

    public function __construct()
    {
        $this->reservation="reservation";
        $db = new Database();
        $this->connexion=$db->connexionBd();
        parent::__construct($this->reservation);
    }

    public function ReservationEvent($PseudoUser,$nomEvent){
        $reservation_sql = "INSERT INTO reservation(id, Pseudo, event) VALUES (null , '$PseudoUser','$nomEvent')";
        $this->connexion->exec($reservation_sql);
    }


}