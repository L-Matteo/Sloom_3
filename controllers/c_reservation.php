<?php 

require_once "models/reservations.php";
require_once "models/salles.php";

class reservationController{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function liste()
    {
        $reservation = new reservation($this->db);
        $lesReserv = $reservation->afficherReserv();
        require_once "views/reservations.php";
    }

    public function c_ajouterReserv()
    {
        $reservation = new reservation($this->db);
        $salles = new salle($this->db);
        $lesSalles = $salles->listeSalle();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salle = $_POST["salle"];
            $dateDeb = $_POST["debut"];
            $dateFin = $_POST["fin"];
            if($salle != "— Sélectionnez une commande —" && $reservation->ajouterReserv($salle, $dateDeb, $dateFin)){ 
                $message = "Salle réservée avec succès !";
                require_once "views/message.php";
            } else {
                require_once "views/reserver.php"; ?>
                <h4 class="text-center">Erreur dans la réservation</h4>
            <?php
            }
        } else {
            require_once "views/reserver.php";
        }
    }

    public function c_suprReserv($id)
    {
        $reservation = new reservation($this->db);
        $reservation->suprReserv($id);
    }
}