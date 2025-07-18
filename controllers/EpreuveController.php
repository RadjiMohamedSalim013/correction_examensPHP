<?php
require_once __DIR__ . '/../models/Epreuve.php';

class EpreuveController
{
    private $model;

    public function __construct()
    {
        require_once __DIR__ . '/../config/databases.php';
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Epreuve($db);
    }

    public function index()
    {
        $epreuves = $this->model->getAll();
        require_once __DIR__ . '/../views/epreuve/liste.php';
    }

    public function createForm()
    {
        require_once __DIR__ . '/../models/Examen.php';
        $examenModel = new Examen();
        $examens = $examenModel->getAll();
        require_once __DIR__ . '/../views/epreuve/create.php';
    }

    public function create($data)
    {
        if ($this->model->create($data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la création.";
        }
    }

    public function editForm($id_epreuve)
    {
        $epreuve = $this->model->getById($id_epreuve);
        require_once __DIR__ . '/../views/epreuve/edit.php';
    }

    public function update($id_epreuve, $data)
    {
        if ($this->model->update($id_epreuve, $data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la mise à jour.";
        }
    }
}
