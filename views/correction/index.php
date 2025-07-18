<?php
require_once __DIR__ . '/../../controllers/CorrectionController.php';

$action = $_GET['action'] ?? 'index';

$controller = new CorrectionController();

switch ($action) {
    case 'index':
        $controller->index();
        break;

    case 'createForm':
        $controller->createForm();
        break;

    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->create($_POST);
        } else {
            $controller->createForm();
        }
        break;

    case 'editForm':
        if (isset($_GET['id_correction'])) {
            $controller->editForm($_GET['id_correction']);
        } else {
            echo "ID correction manquant.";
        }
        break;

    case 'update':
        if (isset($_GET['id_correction']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_GET['id_correction'], $_POST);
        } else {
            echo "Données manquantes pour la mise à jour.";
        }
        break;

    case 'delete':
        if (isset($_GET['id_correction'])) {
            $controller->delete($_GET['id_correction']);
        } else {
            echo "ID correction manquant pour suppression.";
        }
        break;
        
    case 'show':
    if (isset($_GET['id_correction'])) {
        $controller->show($_GET['id_correction']);
    } else {
        echo "ID correction manquant.";
    }
    break;


    default:
        echo "Action non reconnue.";
        break;
}
