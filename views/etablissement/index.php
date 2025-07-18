<?php
require_once __DIR__ .'/../../controllers/etablissementController.php';

$action = $_GET['action'] ?? 'index';

$controller = new EtablissementController();

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
        if (isset($_GET['code_etablissement'])) {
            $controller->editForm($_GET['code_etablissement']);
        } else {
            echo "Code établissement manquant.";
        }
        break;

    case 'update':
        if (isset($_GET['code_etablissement']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_GET['code_etablissement'], $_POST);
        } else {
            echo "Données manquantes pour la mise à jour.";
        }
        break;


    default:
        echo "Action non reconnue.";
        break;
}
?>
