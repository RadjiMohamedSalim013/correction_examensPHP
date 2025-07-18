<?php
require_once __DIR__ . '/../models/Correction.php';

class CorrectionController
{
    private $model;

    public function __construct()
    {
        $this->model = new Correction();
    }

    public function index()
    {
        $corrections = $this->model->getAll();
        require_once __DIR__ . '/../views/correction/liste.php';
    }

    public function createForm()
    {
        require_once __DIR__ . '/../models/Professeur.php';
        require_once __DIR__ . '/../models/Epreuve.php';

        $database = new Database();
        $db = $database->getConnection();

        $professeurModel = new Professeur($db);
        $epreuveModel = new Epreuve($db);

        $professeurs = $professeurModel->getAll();
        $epreuves = $epreuveModel->getAll();

        require_once __DIR__ . '/../views/correction/create.php';
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

    public function editForm($id_correction)
    {
        require_once __DIR__ . '/../models/Professeur.php';
        require_once __DIR__ . '/../models/Epreuve.php';

        $database = new Database();
        $db = $database->getConnection();

        $professeurModel = new Professeur($db);
        $epreuveModel = new Epreuve($db);

        $professeurs = $professeurModel->getAll();
        $epreuves = $epreuveModel->getAll();

        $correction = $this->model->getById($id_correction);
        require_once __DIR__ . '/../views/correction/edit.php';
    }

    public function update($id_correction, $data)
    {
        if ($this->model->update($id_correction, $data)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la mise à jour.";
        }
    }

    public function delete($id_correction)
    {
        if ($this->model->delete($id_correction)) {
            header('Location: index.php?action=index');
            exit;
        } else {
            echo "Erreur lors de la suppression.";
        }
    }

    public function show($id_correction)
{
    $info = $this->model->getFullInfoById($id_correction);
    if ($info) {
        include __DIR__ . '/../views/correction/show.php';
    } else {
        echo "Correction non trouvée.";
    }
}

}
