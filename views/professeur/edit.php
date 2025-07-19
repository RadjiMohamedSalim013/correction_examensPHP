<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Modifier un Professeur</h1>

    <form action="index.php?action=updateProfesseur&matricule=<?= htmlspecialchars($professeur['matricule']) ?>" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule :</label>
            <input type="text" id="matricule" name="matricule" value="<?= htmlspecialchars($professeur['matricule']) ?>" disabled class="form-control">
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($professeur['nom']) ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($professeur['prenom']) ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade :</label>
            <input type="text" id="grade" name="grade" value="<?= htmlspecialchars($professeur['grade']) ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label for="code_etablissement" class="form-label">Code établissement :</label>
            <select id="code_etablissement" name="code_etablissement" required class="form-select">
                <option value="">-- Sélectionnez un établissement --</option>
                <?php foreach ($etablissements as $etablissement): ?>
                    <option value="<?= htmlspecialchars($etablissement['code_etablissement']) ?>" <?= $etablissement['code_etablissement'] == $professeur['code_etablissement'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($etablissement['code_etablissement']) ?> - <?= htmlspecialchars($etablissement['nom_etablissement']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <p class="mt-3"><a href="index.php?action=listProfesseurs" class="btn btn-secondary">← Retour à la liste</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>