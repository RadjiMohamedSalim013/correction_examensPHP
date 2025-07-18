<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un professeur</title>
</head>
<body>

<h1>Ajouter un professeur</h1>

<form action="index.php?action=createProfesseur" method="post">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label><br>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="grade">Grade :</label><br>
    <input type="text" id="grade" name="grade" required><br><br>

    <label for="code_etablissement">Code établissement :</label><br>
    <select id="code_etablissement" name="code_etablissement" required>
        <option value="">-- Sélectionnez un établissement --</option>
        <?php foreach ($etablissements as $etablissement): ?>
            <option value="<?= htmlspecialchars($etablissement['code_etablissement']) ?>">
                <?= htmlspecialchars($etablissement['code_etablissement']) ?> - <?= htmlspecialchars($etablissement['nom_etablissement']) ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Ajouter</button>
</form>

<p><a href="index.php?action=listProfesseurs">Retour à la liste</a></p>

</body>
</html>
