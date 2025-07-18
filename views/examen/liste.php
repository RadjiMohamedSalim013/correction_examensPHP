<?php
require_once '../../models/Examen.php';

$examens = $examens ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des Examens</title>
</head>
<body>
    <h1>Liste des Examens</h1>
    <a href="index.php?action=createForm">Ajouter un examen</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom Examen</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($examens as $exam): ?>
                <tr>
                    <td><?= htmlspecialchars($exam['code_exam']) ?></td>
                    <td><?= htmlspecialchars($exam['nom_exam']) ?></td>
                    <td>
                        <a href="index.php?action=editForm&code_exam=<?= $exam['code_exam'] ?>">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
