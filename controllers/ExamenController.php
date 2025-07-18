<?php
require_once __DIR__ . '/../config/databases.php';
require_once __DIR__ . '/../models/Examen.php';


class ExamenController {
    private $examenModel;

    public function __construct() {
        require_once __DIR__ . '/../config/databases.php';
        $database = new Database();
        $db = $database->getConnection();
        $this->examenModel = new Examen($db);
    }

    public function index() {
        $examens = $this->examenModel->getAll();
        require_once __DIR__ . '/../views/examen/liste.php';
    }

    public function createForm() {
        require_once __DIR__ . '/../views/examen/create.php';
    }

    public function create($data) {
        if ($this->examenModel->create($data)) {
            header("Location: index.php?entity=examen&action=index");
        } else {
            echo "Erreur lors de l'ajout.";
        }
    }

    public function editForm($code_exam) {
        $examen = $this->examenModel->getById($code_exam);
        require_once __DIR__ . '/../views/examen/edit.php';
    }

    public function update($code_exam, $data) {
        if ($this->examenModel->update($code_exam, $data)) {
            header("Location: index.php?entity=examen&action=index");
        } else {
            echo "Erreur lors de la modification.";
        }
    }
}
