<?php
require_once '../models/Correction.php';

$correctionModel = new Correction();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nom_etablissement'     => $_POST['nom_etablissement'] ?? '',
        'ville_etablissement'   => $_POST['ville'] ?? '',
        'nom_prof'              => $_POST['nom_professeur'] ?? '',
        'prenom_prof'           => $_POST['prenom_professeur'] ?? '',
        'grade'                 => $_POST['grade_professeur'] ?? '',
        'code_exam'             => $_POST['code_exam'] ?? '',
        'nom_examen'            => $_POST['nom_exam'] ?? '',
        'nom_epreuve'           => $_POST['nom_epreuve'] ?? '',
        'type_epreuve'          => $_POST['type_epreuve'] ?? '',
        'date_correction'       => $_POST['date_correction'] ?? '',
        'nb_copies'             => $_POST['nb_copies'] ?? 0,
    ];

    $correctionModel->createWithFullData($data);

    header('Location: ../index.php?action=index');
    exit;
}

include '../views/correction/ajouter_manuellement.php';
