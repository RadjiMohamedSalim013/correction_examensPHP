<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des épreuves</title>
</head>
<body>
    <h1>Liste des épreuves</h1>
    <a href="index.php?action=createForm">Ajouter une épreuve</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom épreuve</th>
                <th>Type épreuve</th>
                <th>Code examen</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epreuves as $epreuve): ?>
                <tr>
                    <td><?= htmlspecialchars($epreuve['id_epreuve']) ?></td>
                    <td><?= htmlspecialchars($epreuve['nom_epreuve']) ?></td>
                    <td><?= htmlspecialchars($epreuve['type_epreuve']) ?></td>
                    <td><?= htmlspecialchars($epreuve['code_exam']) ?></td>
                    <td>
                        <a href="index.php?action=editForm&id_epreuve=<?= $epreuve['id_epreuve'] ?>">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
