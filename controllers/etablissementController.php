<?php
require_once __DIR__ . '/../config/databases.php';
require_once __DIR__ . '/../models/Etablissement.php';


class EtablissementController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Etablissement($db);
    }

    // Affiche la liste des etablissements
    public function index() {
        $etablissements = $this->model->getAll();
        include __DIR__ . '/../views/etablissement/liste.php';
    }

    // Affiche le formulaire de création d'un nouvel etablissement
    public function createForm() {
        include __DIR__ . '/../views/etablissement/create.php';
    }

    // Créer un nouvel etablissement
    public function create($data) {
        if ($this->model->add($data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la création.";
        }
    }

    // Affiche le formulaire de modification d'un etablissement
    public function editForm($code) {
        $etablissement = $this->model->getByCode($code);
        include __DIR__ . '/../views/etablissement/edit.php';
    }

    // Modifier un etablissement
    public function update($code, $data) {
        if ($this->model->update($code, $data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la mise à jour.";
        }
    }

 


}
