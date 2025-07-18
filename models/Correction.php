<?php
require_once __DIR__ . '/../config/databases.php';
 require_once __DIR__ . '/Professeur.php';
        require_once __DIR__ . '/Etablissement.php';
        require_once __DIR__ . '/Examen.php';
        require_once __DIR__ . '/Epreuve.php';

class Correction
{
    private $pdo;
    private $professeurModel;
    private $etablissementModel;
    private $examenModel;
    private $epreuveModel;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
        $this->professeurModel = new Professeur($this->pdo);
        $this->etablissementModel = new Etablissement($this->pdo);
        $this->examenModel = new Examen($this->pdo);
        $this->epreuveModel = new Epreuve($this->pdo);
    }

    // Récupérer toutes les corrections
    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT c.*, p.nom, p.prenom FROM correction c LEFT JOIN professeur p ON c.matricule = p.matricule");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer une correction par son ID
    public function getById($id_correction)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM correction WHERE id_correction = ?");
        $stmt->execute([$id_correction]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    // Créer une correction
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

    // Modifier une correction
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

public function createWithFullData($data)
{
    // 1. Créer ou récupérer l'établissement
    $id_etab = $this->etablissementModel->getOrCreate(
        $data['nom_etablissement'],
        $data['ville_etablissement']
    );

    // 2. Créer ou récupérer le professeur
    $matricule = $this->professeurModel->getOrCreate(
        $data['nom_prof'],
        $data['prenom_prof'],
        $data['grade'],
        $id_etab
    );

    // Créer ou récupérer l'examen
    $code_exam = $this->examenModel->getOrCreate(
        $data['code_exam'],
        $data['nom_examen']
    );

    // Créer ou récupérer l’épreuve (attention : dépend du code_exam)
    $id_epreuve = $this->epreuveModel->getOrCreate(
        $data['nom_epreuve'],
        $data['type_epreuve'],
        $code_exam
    );

    // Créer la correction
    $sql = "INSERT INTO correction (matricule, id_epreuve, date_correction, nb_copies)
            VALUES (:matricule, :id_epreuve, :date_correction, :nb_copies)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'matricule' => $matricule,
        'id_epreuve' => $id_epreuve,
        'date_correction' => $data['date_correction'],
        'nb_copies' => $data['nb_copies']
    ]);
}



}
