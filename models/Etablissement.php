<?php

class Etablissement
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Récupérer tous les établissements
    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM etablissement ORDER BY nom_etablissement");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer un établissement par code
    public function getByCode($code_etablissement)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM etablissement WHERE code_etablissement = ?");
        $stmt->execute([$code_etablissement]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Ajouter un établissement
    public function add($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO etablissement (code_etablissement, nom_etablissement, ville) VALUES (?, ?, ?)");
        return $stmt->execute([
            $data['code_etablissement'],
            $data['nom_etablissement'],
            $data['ville']
        ]);
    }

    // Modifier un établissement
    public function update($code_etablissement, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE etablissement SET nom_etablissement = ?, ville = ? WHERE code_etablissement = ?");
        return $stmt->execute([
            $data['nom_etablissement'],
            $data['ville'],
            $code_etablissement
        ]);
    }


    //
    public function getOrCreate($nom_etablissement, $ville)
    {
        $stmt = $this->pdo->prepare("SELECT code_etablissement FROM etablissement WHERE nom_etablissement = ? AND ville = ?");
        $stmt->execute([$nom_etablissement, $ville]);
        $etab = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($etab) {
            return $etab['code_etablissement'];
        } else {
            $insert = $this->pdo->prepare("INSERT INTO etablissement (nom_etablissement, ville) VALUES (?, ?)");
            $insert->execute([$nom_etablissement, $ville]);
            return $this->pdo->lastInsertId();
        }
    }
}
