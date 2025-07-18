<?php
class Professeur {
    private $conn;
    private $table_name = "professeur";

    public $matricule;
    public $nom;
    public $prenom;
    public $grade;
    public $code_etablissement;

    public function __construct($db) {
        $this->conn = $db;
    }

    // recuperer tous les professeurs
    public function getAll() {
        $query = "SELECT matricule, nom, prenom, grade, code_etablissement FROM " . $this->table_name . " ORDER BY nom";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // recuperer un professeur
    public function getOne() {
        $query = "SELECT matricule, nom, prenom, grade, code_etablissement FROM " . $this->table_name . " WHERE matricule = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->matricule);
        $stmt->execute();
        return $stmt;
    }

    // Créer un nouveau professeur
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nom = :nom, prenom = :prenom, grade = :grade, code_etablissement = :code_etablissement";
        $stmt = $this->conn->prepare($query);

        $this->nom = htmlspecialchars(strip_tags($this->nom));
        $this->prenom = htmlspecialchars(strip_tags($this->prenom));
        $this->grade = htmlspecialchars(strip_tags($this->grade));
        $this->code_etablissement = htmlspecialchars(strip_tags($this->code_etablissement));

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':grade', $this->grade);
        $stmt->bindParam(':code_etablissement', $this->code_etablissement);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Mettre à jour un professeur
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nom = :nom, prenom = :prenom, grade = :grade, code_etablissement = :code_etablissement WHERE matricule = :matricule";
        $stmt = $this->conn->prepare($query);

        $this->nom = htmlspecialchars(strip_tags($this->nom));
        $this->prenom = htmlspecialchars(strip_tags($this->prenom));
        $this->grade = htmlspecialchars(strip_tags($this->grade));
        $this->code_etablissement = htmlspecialchars(strip_tags($this->code_etablissement));
        $this->matricule = htmlspecialchars(strip_tags($this->matricule));

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':grade', $this->grade);
        $stmt->bindParam(':code_etablissement', $this->code_etablissement);
        $stmt->bindParam(':matricule', $this->matricule);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Supprimer un professeur
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE matricule = ?";
        $stmt = $this->conn->prepare($query);
        $this->matricule = htmlspecialchars(strip_tags($this->matricule));
        $stmt->bindParam(1, $this->matricule);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
