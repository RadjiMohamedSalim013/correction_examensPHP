<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une correction complète</title>
</head>
<body>
    <h2>Ajout manuel d'une correction complète</h2>

    <form action="../../controllers/correction_formulaire_manuel.php" method="POST">
        <fieldset>
            <legend>Informations sur l’établissement</legend>
            <label>Nom de l’établissement :</label>
            <input type="text" name="nom_etablissement" required><br>

            <label>Ville :</label>
            <input type="text" name="ville" required><br>
        </fieldset>

        <fieldset>
            <legend>Informations sur le professeur</legend>
            <label>Nom :</label>
            <input type="text" name="nom_professeur" required><br>

            <label>Prénom :</label>
            <input type="text" name="prenom_professeur" required><br>

            <label>Grade :</label>
            <input type="text" name="grade_professeur" required><br>
        </fieldset>

        <fieldset>
            <legend>Informations sur l’examen</legend>
            <label>Code de l’examen :</label>
            <input type="text" name="code_exam" required><br>

            <label>Nom de l’examen :</label>
            <input type="text" name="nom_exam" required><br>
        </fieldset>

        <fieldset>
            <legend>Informations sur l’épreuve</legend>
            <label>Nom de l’épreuve :</label>
            <input type="text" name="nom_epreuve" required><br>

            <label>Type d’épreuve :</label>
            <input type="text" name="type_epreuve" required><br>
        </fieldset>

        <fieldset>
            <legend>Informations sur la correction</legend>
            <label>Date de correction :</label>
            <input type="date" name="date_correction" required><br>

            <label>Nombre de copies :</label>
            <input type="number" name="nb_copies" min="0" required><br>
        </fieldset>

        <button type="submit">Enregistrer la correction</button>
    </form>

    <p><a href="liste.php">← Retour à la liste des corrections</a></p>
</body>
</html>
