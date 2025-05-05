<?php 

class Utilisateur {

    private $conn;
    private $table_name = "utilisateur";

    private $nomUtil;
    private $prenomUtil;
    private $mailUtil;
    private $mdpUtil;
    private $raisonSociale;
    private $telUtil;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getNomUtil() { return $this->nomUtil; }
    public function getPrenomUtil() { return $this->prenomUtil; }
    public function getMailUtil() { return $this->mailUtil; }
    public function getMdpUtil() { return $this->mdpUtil; }
    public function getRaisonSociale() { return $this->raisonSociale; }
    public function getTelUtil() { return $this->telUtil; }

    public function createUser($mdp, $prenom, $nom, $rs, $mail, $tel) 
    {
        $query = "INSERT INTO " . $this->table_name . "(mdpUtil, prenomUtil, nomUtil, raisonSociale, mailUtil, telUtil) VALUES(:mdp, :prenom, :nom, :rs, :mail, :tel)";

        $stmt = $this->conn->prepare($query);

        $mdpHache = password_hash($mdp, PASSWORD_DEFAULT);

        $stmt->bindParam(":mdp", $mdpHache);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":rs", $rs);
        $stmt->bindParam(":mail", $mail);
        $stmt->bindParam(":tel", $tel);
        $stmt->execute();

        return $stmt;
    }

    public function connexion($mail, $password)
    {
        $query = "SELECT id, nomUtil, prenomUtil, mdpUtil, mailUtil, telUtil, raisonSociale FROM " . $this->table_name. " WHERE mailUtil = :mail";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":mail", $mail);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['mdpUtil'])) {
            return $user;
        }

        return false;
    } 

    public function updateUser($nom, $prenom, $rs, $tel, $mail)
    {
        try {
            $query = "update " . $this->table_name . " set nomUtil = :newNom, prenomUtil = :newPrenom, raisonSociale = :newRs, telUtil = :newTel, mailUtil = :newMail where id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":newNom", $nom);
            $stmt->bindParam(":newPrenom", $prenom);
            $stmt->bindParam(":newRs", $rs);
            $stmt->bindParam(":newTel", $tel);
            $stmt->bindParam(":newMail", $mail);
            $stmt->bindParam(":id", $_SESSION["id_user"]);
            
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
        
    }

}

?>