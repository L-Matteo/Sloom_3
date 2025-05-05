<?php 
// Durée de vie du cookie : 7 jours (en secondes)
$lifetime = 60 * 60 * 24 * 7; 
session_set_cookie_params($lifetime);
session_start();

require_once "models/database.php";
require_once "controllers/c_reservation.php";
require_once "controllers/c_utilisateur.php";
require_once "views/v_header.php";

$database = new Database();
$db = $database->getBdd();

$action = $_GET["action"] ?? "accueil";

$c_reserv = new reservationController($db);
$c_user = new utilisateurController($db);

switch($action){
    case "accueil":
        require_once "views/v_accueil.php";
        break;
    case "reservation":
        if(!isset($_SESSION["nom_user"])) {
            $message = "Veuillez vous connecter.";
            require_once "views/message.php";
        } else {
            $c_reserv->liste(); 
            if(isset($_GET["id"])){
                $c_reserv->c_suprReserv($_GET["id"]);
                header("Location: index.php?action=reservation"); 
            }
        }
        break;
    case "reserver":
        if(!isset($_SESSION["nom_user"])) {
            $message = "Veuillez vous connecter.";
            require_once "views/message.php";
        } else {
            $c_reserv->c_ajouterReserv();
        }
        break;
    case "compte":
        if(!isset($_SESSION["nom_user"])) {
            $c_user->c_connexion(); 
        } else {
            $c_user->c_updateUser();
            $c_user->c_deconnexion();
        }
        break;
    case "createAccount":
        $c_user->c_createUser();
        break;
    case "ml":
        require_once "views/mentionsLegales.php";
        break;
    case "contact":
        require_once "views/contact.php";
        break;
    default:
        echo "Aucune action définit";
        break;
}

require_once "views/v_footer.php";