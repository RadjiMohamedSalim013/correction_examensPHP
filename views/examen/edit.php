<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Modifier un examen</h1>

    <form action="index.php?action=update&code_exam=<?= urlencode($examen['code_exam']) ?>" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="code_exam" class="form-label">Code de l'examen :</label>
            <input type="text" id="code_exam" name="code_exam" value="<?= htmlspecialchars($examen['code_exam']) ?>" readonly class="form-control">
        </div>

        <div class="mb-3">
            <label for="nom_exam" class="form-label">Nom de l'examen :</label>
            <input type="text" id="nom_exam" name="nom_exam" value="<?= htmlspecialchars($examen['nom_exam']) ?>" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <p class="mt-3"><a href="index.php" class="btn btn-secondary">Retour à la liste</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
