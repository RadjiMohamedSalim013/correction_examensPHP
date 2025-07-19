<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Modifier un établissement</h1>

    <form method="post" action="index.php?action=update&code_etablissement=<?= htmlspecialchars($etablissement['code_etablissement']) ?>" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="code_etablissement" class="form-label">Code établissement :</label>
            <input type="text" id="code_etablissement" name="code_etablissement" value="<?= htmlspecialchars($etablissement['code_etablissement']) ?>" readonly class="form-control">
        </div>

        <div class="mb-3">
            <label for="nom_etablissement" class="form-label">Nom établissement :</label>
            <input type="text" id="nom_etablissement" name="nom_etablissement" value="<?= htmlspecialchars($etablissement['nom_etablissement']) ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input type="text" id="ville" name="ville" value="<?= htmlspecialchars($etablissement['ville']) ?>" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <p class="mt-3"><a href="index.php" class="btn btn-secondary">Retour à la liste</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
