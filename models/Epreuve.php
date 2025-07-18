<?php
require_once __DIR__ . '/../config/databases.php';

class Epreuve
{
    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM epreuve");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_epreuve)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM epreuve WHERE id_epreuve = ?");
        $stmt->execute([$id_epreuve]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO epreuve (nom_epreuve, type_epreuve, code_exam) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nom_epreuve'], $data['type_epreuve'], $data['code_exam']]);
    }

    public function update($id_epreuve, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE epreuve SET nom_epreuve = ?, type_epreuve = ?, code_exam = ? WHERE id_epreuve = ?");
        return $stmt->execute([$data['nom_epreuve'], $data['type_epreuve'], $data['code_exam'], $id_epreuve]);
    }

    public function delete($id_epreuve)
    {
        $stmt = $this->pdo->prepare("DELETE FROM epreuve WHERE id_epreuve = ?");
        return $stmt->execute([$id_epreuve]);
    }
}
