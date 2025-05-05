<?php 

class salle {
    private $conn;
    private $table_name = "espace";

    private $nomEspace;
    private $superfEspace;
    private $dispo; 
    private $capaciteAcc;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getNom(){ return $this->nomEspace;}
    public function setNom($nom){ $this->nomEspace = $nom; }
    public function getSuperf() { return $this->superfEspace; }
    public function setSuperf($superf){$this->superfEspace = $superf;}
    public function getDispo(){return $this->dispo;}
    public function setDispo($dispo){$this->dispo = $dispo;}
    public function getCapa(){return $this->capaciteAcc;}
    public function setCapa($capa){$this->capaciteAcc = $capa;}

    public function listeSalle()
    {
        try {
            $query = "select id, nomEspace from " . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute(); 

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Erreu : " . $e->getMessage();
            return false;
        }
    }

}

?>