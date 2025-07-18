<?php
require_once __DIR__ . '/../config/databases.php';

class Examen
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM examen");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($code_exam)
    {
        $stmt = $this->db->prepare("SELECT * FROM examen WHERE code_exam = ?");
        $stmt->execute([$code_exam]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO examen (code_exam, nom_exam) VALUES (?, ?)");
        return $stmt->execute([$data['code_exam'], $data['nom_exam']]);
    }

    public function update($code_exam, $data)
    {
        $stmt = $this->db->prepare("UPDATE examen SET nom_exam = ? WHERE code_exam = ?");
        return $stmt->execute([$data['nom_exam'], $code_exam]);
    }

    public function delete($code_exam)
    {
        $stmt = $this->db->prepare("DELETE FROM examen WHERE code_exam = ?");
        return $stmt->execute([$code_exam]);
    }

    public function getOrCreate($code_exam, $nom_exam)
    {
        $stmt = $this->db->prepare("SELECT code_exam FROM examen WHERE code_exam = ?");
        $stmt->execute([$code_exam]);
        $exam = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($exam) {
            return $exam['code_exam'];
        } else {
            $insert = $this->db->prepare("INSERT INTO examen (code_exam, nom_exam) VALUES (?, ?)");
            $insert->execute([$code_exam, $nom_exam]);
            return $code_exam;
        }
    }
}
