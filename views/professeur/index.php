<?php
require_once __DIR__ .'/../../controllers/professeurController.php';


$action = $_GET['action'] ?? 'index';

$controller = new ProfesseurController();


switch ($action) {
    case 'listProfesseurs':
    case 'index':
        $controller->index();
        break;

    case 'createFormProfesseur':
        $controller->createForm();
        break;

    case 'createProfesseur':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->create($_POST);
        } else {
            $controller->createForm();
        }
        break;

    case 'editFormProfesseur':
        if (isset($_GET['matricule'])) {
            $controller->editForm($_GET['matricule']);
        } else {
            echo "Matricule manquant pour la modification.";
        }
        break;

    case 'updateProfesseur':
        if (isset($_GET['matricule']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_GET['matricule'], $_POST);
        } else {
            echo "Données manquantes pour la mise à jour.";
        }
        break;

    /*case 'deleteProfesseur':
        if (isset($_GET['matricule'])) {
            $controller->delete($_GET['matricule']);
        } else {
            echo "Matricule manquant pour la suppression.";
        }
        break;*/

    default:
        echo "Action non reconnue.";
        break;
}
?>
