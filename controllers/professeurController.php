<?php
require_once __DIR__ . '/../config/databases.php';
require_once __DIR__ . '/../models/Professeur.php';

class ProfesseurController {
    private $db;
    private $professeur;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->professeur = new Professeur($this->db);
    }

    // Liste tous les professeurs
    public function index() {
        $stmt = $this->professeur->getAll();
        $professeurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once __DIR__ . '/../views/professeur/liste.php';
    }

    // Affiche le formulaire de création
    public function createForm() {
        require_once __DIR__ . '/../models/Etablissement.php';
        $etablissementModel = new Etablissement($this->db);
        $etablissements = $etablissementModel->getAll();
        require_once __DIR__ . '/../views/professeur/create.php';
    }

    // traitement de la création d’un professeur
    public function create($data) {
        $this->professeur->nom = $data['nom'];
        $this->professeur->prenom = $data['prenom'];
        $this->professeur->grade = $data['grade'];
        $this->professeur->code_etablissement = $data['code_etablissement'];

        if ($this->professeur->create()) {
            header("Location: index.php?action=listProfesseurs");
            exit();
        } else {
            echo "Erreur lors de la création du professeur.";
        }
    }

    // Affiche le formulaire d’édition
    public function editForm($matricule) {
        $this->professeur->matricule = $matricule;
        $stmt = $this->professeur->getOne();
        $professeur = $stmt->fetch(PDO::FETCH_ASSOC);

        require_once __DIR__ . '/../models/Etablissement.php';
        $etablissementModel = new Etablissement($this->db);
        $etablissements = $etablissementModel->getAll();

        require_once __DIR__ . '/../views/professeur/edit.php';
    }

    // Traite la mise à jour
    public function update($matricule, $data) {
        $this->professeur->matricule = $matricule;
        $this->professeur->nom = $data['nom'];
        $this->professeur->prenom = $data['prenom'];
        $this->professeur->grade = $data['grade'];
        $this->professeur->code_etablissement = $data['code_etablissement'];

        if ($this->professeur->update()) {
            header("Location: index.php?action=listProfesseurs");
            exit();
        } else {
            echo "Erreur lors de la mise à jour du professeur.";
        }
    }

    // Supprime un professeur
    /*public function delete($matricule) {
        $this->professeur->matricule = $matricule;
        if ($this->professeur->delete()) {
            header("Location: index.php?action=listProfesseurs");
            exit();
        } else {
            echo "Erreur lors de la suppression du professeur.";
        }
    }*/
}
