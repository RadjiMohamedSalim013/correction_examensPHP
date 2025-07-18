<?php
// views/professeur/index.php
// Affiche la liste des professeurs
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des professeurs</title>
</head>
<body>

<h1>Liste des professeurs</h1>

<a href="index.php?action=createFormProfesseur">Ajouter un professeur</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Grade</th>
            <th>Code établissement</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($professeurs)) : ?>
            <?php foreach ($professeurs as $prof) : ?>
                <tr>
                    <td><?= htmlspecialchars($prof['matricule']) ?></td>
                    <td><?= htmlspecialchars($prof['nom']) ?></td>
                    <td><?= htmlspecialchars($prof['prenom']) ?></td>
                    <td><?= htmlspecialchars($prof['grade']) ?></td>
                    <td><?= htmlspecialchars($prof['code_etablissement']) ?></td>
                    <td>
                        <a href="index.php?action=editFormProfesseur&matricule=<?= $prof['matricule'] ?>">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="6">Aucun professeur trouvé.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
