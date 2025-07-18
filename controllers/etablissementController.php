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

    public function index() {
        $etablissements = $this->model->getAll();
        include __DIR__ . '/../views/etablissement/liste.php';
    }

    public function createForm() {
        include __DIR__ . '/../views/etablissement/create.php';
    }

    public function create($data) {
        if ($this->model->add($data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la création.";
        }
    }

    public function editForm($code) {
        $etablissement = $this->model->getByCode($code);
        include __DIR__ . '/../views/etablissement/edit.php';
    }

    public function update($code, $data) {
        if ($this->model->update($code, $data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la mise à jour.";
        }
    }

}
