<?php

class reservation{
    public $conn;
    public $table_name = "reservation";

    public $id; 
    public $datePaiementReser;
    public $dateHeureDebReser;
    public $dateHeureFinReser;
    public $montantReser;
    public $idEtat;
    public $idUtil;
    public $idEspace;

    public function __construct($db){
        $this->conn = $db;
    }

    public function afficherReserv()
    {
        try {
            $query = "select espace.nomEspace, reservation.id, dateDebReser, dateFinReser from " . $this->table_name . " join espace on idEspace = espace.id where idUtil = :id";
            $stmt=$this->conn->prepare($query);
            $stmt->bindParam(":id", $_SESSION["id_user"]);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    public function ajouterReserv($salle, $dateDebut, $dateFin)
    {
        try {
            $query = "insert into " . $this->table_name . "(dateDebReser, dateFinReser, idEtat, idUtil, idEspace) values (:dateDeb, :dateFin, 1, :idUser, :idEspace)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":dateDeb", $dateDebut);
            $stmt->bindParam(":dateFin", $dateFin);
            $stmt->bindParam(":idUser", $_SESSION["id_user"]);
            $stmt->bindParam(":idEspace", $salle);

            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    public function suprReserv($id){
        try {
            $query = "DELETE FROM " . $this->table_name . " WHERE id = :id"; 
            $stmt = $this->conn->prepare($query); 
            $stmt->bindParam(":id", $id);

            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}

