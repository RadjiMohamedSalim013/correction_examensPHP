<?php
require_once __DIR__ . '/../config/databases.php';

class Correction
{
    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT c.*, p.nom, p.prenom FROM correction c LEFT JOIN professeur p ON c.matricule = p.matricule");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_correction)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM correction WHERE id_correction = ?");
        $stmt->execute([$id_correction]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO correction (matricule, id_epreuve, date_correction, nb_copies) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['matricule'],
            $data['id_epreuve'],
            $data['date_correction'],
            $data['nb_copies']
        ]);
    }

    public function update($id_correction, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE correction SET matricule = ?, id_epreuve = ?, date_correction = ?, nb_copies = ? WHERE id_correction = ?");
        return $stmt->execute([
            $data['matricule'],
            $data['id_epreuve'],
            $data['date_correction'],
            $data['nb_copies'],
            $id_correction
        ]);
    }

    public function delete($id_correction)
    {
        $stmt = $this->pdo->prepare("DELETE FROM correction WHERE id_correction = ?");
        return $stmt->execute([$id_correction]);
    }

    public function getFullInfoById($id_correction)
{
    $sql = "SELECT 
                c.id_correction,
                c.date_correction,
                c.nb_copies,
                p.nom AS nom_prof,
                p.prenom AS prenom_prof,
                p.grade,
                e.nom_etablissement,
                e.ville,
                ex.code_exam,
                ex.nom_exam,
                ep.nom_epreuve,
                ep.type_epreuve
            FROM correction c
            JOIN professeur p ON c.matricule = p.matricule
            JOIN etablissement e ON p.code_etablissement = e.code_etablissement
            JOIN epreuve ep ON c.id_epreuve = ep.id_epreuve
            JOIN examen ex ON ep.code_exam = ex.code_exam
            WHERE c.id_correction = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id_correction]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
