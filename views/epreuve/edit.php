<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Modifier une épreuve</h1>

    <form action="index.php?action=update&id_epreuve=<?= htmlspecialchars($epreuve['id_epreuve']) ?>" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nom_epreuve" class="form-label">Nom de l'épreuve :</label>
            <input type="text" id="nom_epreuve" name="nom_epreuve" value="<?= htmlspecialchars($epreuve['nom_epreuve']) ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="type_epreuve" class="form-label">Type d'épreuve :</label>
            <select id="type_epreuve" name="type_epreuve" required class="form-select">
                <option value="écrit" <?= $epreuve['type_epreuve'] === 'écrit' ? 'selected' : '' ?>>Écrit</option>
                <option value="oral" <?= $epreuve['type_epreuve'] === 'oral' ? 'selected' : '' ?>>Oral</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="code_exam" class="form-label">Code de l'examen :</label>
            <input type="text" id="code_exam" name="code_exam" value="<?= htmlspecialchars($epreuve['code_exam']) ?>" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <p class="mt-3"><a href="index.php" class="btn btn-secondary">Retour à la liste</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
