<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un examen</title>
</head>
<body>
    <h1>Ajouter un Examen</h1>
    <form action="index.php?action=create" method="POST">
        <label for="code_exam">Code de l'examen :</label>
        <input type="text" id="code_exam" name="code_exam" required><br><br>

        <label for="nom_exam">Nom de l'examen :</label>
        <input type="text" id="nom_exam" name="nom_exam" required><br><br>

        <input type="submit" value="Enregistrer">
    </form>

    <p><a href="index.php">Retour à la liste</a></p>
</body>
</html>
