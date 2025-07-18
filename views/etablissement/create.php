<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un établissement</title>
</head>
<body>
    <h1>Ajouter un établissement</h1>

    <form method="post" action="index.php?action=create">
        <label for="code_etablissement">Code établissement :</label><br>
        <input type="text" id="code_etablissement" name="code_etablissement" required><br><br>

        <label for="nom_etablissement">Nom établissement :</label><br>
        <input type="text" id="nom_etablissement" name="nom_etablissement" required><br><br>

        <label for="ville">Ville :</label><br>
        <input type="text" id="ville" name="ville" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
