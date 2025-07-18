<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier un établissement</title>
</head>
<body>
    <h1>Modifier l'établissement</h1>

    <form method="post" action="index.php?action=update&code_etablissement=<?= htmlspecialchars($etablissement['code_etablissement']) ?>">
        <label for="code_etablissement">Code établissement :</label><br>
        <input type="text" id="code_etablissement" name="code_etablissement" value="<?= htmlspecialchars($etablissement['code_etablissement']) ?>" readonly><br><br>

        <label for="nom_etablissement">Nom établissement :</label><br>
        <input type="text" id="nom_etablissement" name="nom_etablissement" value="<?= htmlspecialchars($etablissement['nom_etablissement']) ?>" required><br><br>

        <label for="ville">Ville :</label><br>
        <input type="text" id="ville" name="ville" value="<?= htmlspecialchars($etablissement['ville']) ?>" required><br><br>

        <button type="submit">Mettre à jour</button>
    </form>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
