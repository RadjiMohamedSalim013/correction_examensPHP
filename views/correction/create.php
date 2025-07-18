<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une correction</title>
</head>
<body>
    <h1>Ajouter une correction</h1>
    <form action="index.php?action=create" method="post">
        <label for="matricule">Matricule Professeur:</label><br>
        <select id="matricule" name="matricule" required>
            <option value="">-- Sélectionnez un professeur --</option>
            <?php foreach ($professeurs as $professeur): ?>
                <option value="<?= htmlspecialchars($professeur['matricule']) ?>">
                    <?= htmlspecialchars($professeur['matricule']) ?> - <?= htmlspecialchars($professeur['nom']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="id_epreuve">ID Épreuve:</label><br>
        <select id="id_epreuve" name="id_epreuve" required>
            <option value="">-- Sélectionnez une épreuve --</option>
            <?php foreach ($epreuves as $epreuve): ?>
                <option value="<?= htmlspecialchars($epreuve['id_epreuve']) ?>">
                    <?= htmlspecialchars($epreuve['id_epreuve']) ?> - <?= htmlspecialchars($epreuve['nom_epreuve']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="date_correction">Date Correction:</label><br>
        <input type="date" id="date_correction" name="date_correction" required><br><br>

        <label for="nb_copies">Nombre Copies:</label><br>
        <input type="number" id="nb_copies" name="nb_copies" required><br><br>

        <input type="submit" value="Ajouter">
    </form>
    <br>
    <a href="index.php?action=index">Retour à la liste des corrections</a>
</body>
</html>
