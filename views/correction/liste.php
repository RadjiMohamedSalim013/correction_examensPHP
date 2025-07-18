<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des corrections</title>
</head>
<body>
    <h1>Liste des corrections</h1>
    <a href="index.php?action=createForm">Ajouter une correction</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Matricule Professeur</th>
                <th>ID Épreuve</th>
                <th>Date Correction</th>
                <th>Nombre Copies</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($corrections as $correction): ?>
                <tr>
                    <td><?= htmlspecialchars($correction['id_correction']) ?></td>
                    <td><?= htmlspecialchars($correction['nom']) ?> <?= htmlspecialchars($correction['prenom']) ?></td>
                    <td><?= htmlspecialchars($correction['id_epreuve']) ?></td>
                    <td><?= htmlspecialchars($correction['date_correction']) ?></td>
                    <td><?= htmlspecialchars($correction['nb_copies']) ?></td>
                    <td>
                        <a href="index.php?action=editForm&id_correction=<?= $correction['id_correction'] ?>">Modifier</a> |
                        <a href="index.php?action=show&id_correction=<?= $correction['id_correction'] ?>">Voir plus</a>

                        <a href="index.php?action=delete&id_correction=<?= $correction['id_correction'] ?>"
                           onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
