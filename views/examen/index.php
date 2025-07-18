<?php
require_once __DIR__ .'/../../controllers/ExamenController.php';


$action = $_GET['action'] ?? 'index';

$controller = new ExamenController();

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
        if (isset($_GET['code_exam'])) {
            $controller->editForm($_GET['code_exam']);
        } else {
            echo "Code examen manquant.";
        }
        break;

    case 'update':
        if (isset($_GET['code_exam']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($_GET['code_exam'], $_POST);
        } else {
            echo "Données manquantes.";
        }
        break;

    default:
        echo "Action non reconnue.";
        break;
}
?>
