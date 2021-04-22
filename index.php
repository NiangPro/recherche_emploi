<?php
session_start();

// Elle permet de charger toutes les classes
function autoload($class_name){
    require_once('model/'.$class_name.'.php');	
}
spl_autoload_register('autoload');

// Elle permet toutes les fonctions de test
require_once('layouts/_functions.php');

// entête
require_once('layouts/_header.php');

// mon routeur

    // si $_GET['page'] existe
    if (isset($_GET['page'])) {
        // connexion à la base de donnée
        $db = new Database('remploi');

        switch ($_GET['page']) {
            case 'login':
                require_once('controller/loginController.php');
                break;
            case 'register':
                require_once('controller/registerController.php');
                break;
            case 'profil':
                require_once('controller/profilController.php');
                break;
            case 'addCv':
                require_once('controller/addCvController.php');
                break;
            case 'infoEmploi':
                $emp = $db->getEmploiById($_GET['id']);
                require_once('views/infoEmploi.php');
                break;
            case 'editEmploi':
                $emp = $db->getEmploiById($_GET['id']);
                require_once('controller/editEmploiController.php');
                break;
            case 'editCv':
                $cv = $db->getCvById($_GET['id']);
                require_once('controller/editCvController.php');
                break;
            case 'logout':
                require_once('controller/logoutController.php');
                break;
            default:
                require_once('views/home.php');
                break;
        }
    }else{
        // page d'accueil
        require_once('views/home.php');
    }

// fin routeur

// pied de page
require_once('layouts/_footer.php');