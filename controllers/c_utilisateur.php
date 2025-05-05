<?php

require_once "models/utilisateur.php";

class utilisateurController {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function c_createUser() 
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = new Utilisateur($this->db);

            $nom = $_POST["lastName"];
            $prenom = $_POST["firstName"];
            $rs = $_POST["raisonSocial"];
            $tel = $_POST["tel"];
            $mail = $_POST["mail"];
            $mdp = $_POST["password"];

            if($user->createUser($nom, $prenom, $rs, $tel, $mail, $mdp)) { 
                $message = "Compte créé avec succès !"; 
                require_once "views/message.php";
            } else {
                require_once "views/createAccount.php"; ?>
                <h4 class="text-center mt-5">Erreur dans la création du compte</h4> 
            <?php
            }
            
        } else {
            require_once "views/createAccount.php";
        }
    }

    public function c_connexion()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $utilisateur = new Utilisateur($this->db);

            $mail = $_POST["mailConnexion"];
            $password = $_POST["passwordConnexion"];

            $userData = $utilisateur->connexion($mail, $password);
            if($userData){ 
                $_SESSION["id_user"] = $userData["id"];
                $_SESSION["nom_user"] = $userData["nomUtil"];
                $_SESSION["prenom_user"] = $userData["prenomUtil"]; 
                $_SESSION["mail_user"] = $userData["mailUtil"]; 
                $_SESSION["tel_user"] = $userData["telUtil"];
                $_SESSION["rs"] = $userData["raisonSociale"];
                require_once "views/monCompte.php";
            } else { 
                require_once "views/connexion.php"; ?>
                <h4 class="text-center mt-5">Email ou mot de passe incorrect </h4> 
            <?php
            }
        } else {
            require_once "views/connexion.php";
        }
    }

    public function c_deconnexion() 
    {
        if(isset($_SESSION["nom_user"]) && isset($_POST["deco"])) {
            session_destroy();
            header("Location: index.php?action=compte");
        }
    }

    public function c_updateUser() 
    {
        if(isset($_POST["modif"])) {
            $utilisateur = new Utilisateur($this->db);

            $nom = $_POST["lastNameCompte"];
            $prenom = $_POST["firstNameCompte"];
            $rs = $_POST["rsCompte"];
            $tel = $_POST["telCompte"];
            $mail = $_POST["mailCompte"];

            if($utilisateur->updateUser($nom, $prenom, $rs, $tel, $mail)) { 
                $message = "Vos informations ont été modifiés avec succès !";
                require_once "views/message.php";
            }
        } else {
            require_once "views/monCompte.php";
        }
    }
}
?>