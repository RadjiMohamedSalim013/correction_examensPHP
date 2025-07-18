<?php
require_once __DIR__ .'/../../controllers/EpreuveController.php';

$action = $_GET['action'] ?? 'index';

$controller = new EpreuveController();

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
        if (isset($_GET['id_epreuve'])) {
            $controller->editForm($_GET['id_epreuve']);
        } else {
            echo "ID épreuve manquant.";
        }
        break;

    case 'update':
        if (isset($_GET['id_epreuve']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_GET['id_epreuve'], $_POST);
        } else {
            echo "Données manquantes pour la mise à jour.";
        }
        break;

    default:
        echo "Action non reconnue.";
        break;
}
