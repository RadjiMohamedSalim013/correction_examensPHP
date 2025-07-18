<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier un examen</title>
</head>
<body>
    <h1>Modifier l'examen</h1>
    <form action="index.php?action=update&code_exam=<?= urlencode($examen['code_exam']) ?>" method="POST">
        <label for="code_exam">Code de l'examen :</label>
        <input type="text" id="code_exam" name="code_exam" value="<?= htmlspecialchars($examen['code_exam']) ?>" readonly><br><br>

        <label for="nom_exam">Nom de l'examen :</label>
        <input type="text" id="nom_exam" name="nom_exam" value="<?= htmlspecialchars($examen['nom_exam']) ?>" required><br><br>

        <input type="submit" value="Mettre à jour">
    </form>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
