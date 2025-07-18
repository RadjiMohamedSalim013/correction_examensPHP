<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails de la correction</title>
</head>
<body>
    <h1>Détails de la correction ID <?= htmlspecialchars($info['id_correction']) ?></h1>

    <p><strong>Nom du professeur :</strong> <?= htmlspecialchars($info['nom_prof']) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($info['prenom_prof']) ?></p>
    <p><strong>Grade :</strong> <?= htmlspecialchars($info['grade']) ?></p>
    <p><strong>Nom de l'établissement :</strong> <?= htmlspecialchars($info['nom_etablissement']) ?></p>
    <p><strong>Ville de l'établissement :</strong> <?= htmlspecialchars($info['ville']) ?></p>
    <p><strong>Code examen :</strong> <?= htmlspecialchars($info['code_exam']) ?></p>
    <p><strong>Nom examen :</strong> <?= htmlspecialchars($info['nom_exam']) ?></p>
    <p><strong>Nom de l'épreuve :</strong> <?= htmlspecialchars($info['nom_epreuve']) ?></p>
    <p><strong>Type d'épreuve :</strong> <?= htmlspecialchars($info['type_epreuve']) ?></p>
    <p><strong>Date de correction :</strong> <?= htmlspecialchars($info['date_correction']) ?></p>
    <p><strong>Nombre de copies :</strong> <?= htmlspecialchars($info['nb_copies']) ?></p>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
