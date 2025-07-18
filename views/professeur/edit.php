<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Professeur</title>
</head>
<body>

    <h1>Modifier un Professeur</h1>

    <form action="index.php?action=updateProfesseur&matricule=<?= htmlspecialchars($professeur['matricule']) ?>" method="post">
        <label for="matricule">Matricule :</label><br>
        <input type="text" id="matricule" name="matricule" value="<?= htmlspecialchars($professeur['matricule']) ?>" disabled><br><br>

        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($professeur['nom']) ?>" required><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($professeur['prenom']) ?>" required><br><br>

        <label for="grade">Grade :</label><br>
        <input type="text" id="grade" name="grade" value="<?= htmlspecialchars($professeur['grade']) ?>"><br><br>

        <label for="code_etablissement">Code établissement :</label><br>
        <select id="code_etablissement" name="code_etablissement" required>
            <option value="">-- Sélectionnez un établissement --</option>
            <?php foreach ($etablissements as $etablissement): ?>
                <option value="<?= htmlspecialchars($etablissement['code_etablissement']) ?>" <?= $etablissement['code_etablissement'] == $professeur['code_etablissement'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($etablissement['code_etablissement']) ?> - <?= htmlspecialchars($etablissement['nom_etablissement']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <button type="submit">Mettre à jour</button>
    </form>

    <p><a href="index.php?action=listProfesseurs">← Retour à la liste</a></p>

</body>
</html>
