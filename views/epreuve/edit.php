<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier une épreuve</title>
</head>
<body>
    <h1>Modifier l'épreuve</h1>

    <form action="index.php?action=update&id_epreuve=<?= htmlspecialchars($epreuve['id_epreuve']) ?>" method="POST">
        <label for="nom_epreuve">Nom de l'épreuve :</label><br>
        <input type="text" id="nom_epreuve" name="nom_epreuve" value="<?= htmlspecialchars($epreuve['nom_epreuve']) ?>" required><br><br>

        <label for="type_epreuve">Type d'épreuve :</label><br>
        <select id="type_epreuve" name="type_epreuve" required>
            <option value="écrit" <?= $epreuve['type_epreuve'] === 'écrit' ? 'selected' : '' ?>>Écrit</option>
            <option value="oral" <?= $epreuve['type_epreuve'] === 'oral' ? 'selected' : '' ?>>Oral</option>
        </select><br><br>

        <label for="code_exam">Code de l'examen :</label><br>
        <input type="text" id="code_exam" name="code_exam" value="<?= htmlspecialchars($epreuve['code_exam']) ?>" required><br><br>

        <button type="submit">Mettre à jour</button>
    </form>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
