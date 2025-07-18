<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des établissements</title>
</head>
<body>
    <h1>Liste des établissements</h1>

    <a href="index.php?action=createForm">Ajouter un établissement</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etablissements as $etab): ?>
                <tr>
                    <td><?= htmlspecialchars($etab['code_etablissement']) ?></td>
                    <td><?= htmlspecialchars($etab['nom_etablissement']) ?></td>
                    <td><?= htmlspecialchars($etab['ville']) ?></td>
                    <td>
                        <a href="index.php?action=editForm&code_etablissement=<?= $etab['code_etablissement'] ?>">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
