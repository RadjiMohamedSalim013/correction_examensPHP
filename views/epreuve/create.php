<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une épreuve</title>
</head>
<body>
    <h1>Ajouter une épreuve</h1>
    <form action="index.php?action=create" method="post">
        <label for="nom_epreuve">Nom de l'épreuve:</label><br>
        <input type="text" id="nom_epreuve" name="nom_epreuve" required><br><br>

        <label>Type d'épreuve:</label><br>
        <input type="radio" id="type_ecrite" name="type_epreuve" value="écrite" required>
        <label for="type_ecrite">Écrite</label><br>
        <input type="radio" id="type_orale" name="type_epreuve" value="orale" required>
        <label for="type_orale">Orale</label><br><br>

        <label for="code_exam">Code examen:</label><br>
        <select id="code_exam" name="code_exam" required>
            <option value="">-- Sélectionnez un examen --</option>
            <?php foreach ($examens as $examen): ?>
                <option value="<?= htmlspecialchars($examen['code_exam']) ?>"><?= htmlspecialchars($examen['code_exam']) ?> - <?= htmlspecialchars($examen['nom_exam']) ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Ajouter">
    </form>
    <br>
    <a href="index.php?action=index">Retour à la liste des épreuves</a>
</body>
</html>
