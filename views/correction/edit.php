<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Modifier une correction</h1>

    <form action="index.php?action=update&id_correction=<?= htmlspecialchars($correction['id_correction']) ?>" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule Professeur :</label>
            <select id="matricule" name="matricule" required class="form-select">
                <option value="">-- Sélectionnez un professeur --</option>
                <?php foreach ($professeurs as $professeur): ?>
                    <option value="<?= htmlspecialchars($professeur['matricule']) ?>" <?= ($professeur['matricule'] == $correction['matricule']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($professeur['matricule']) ?> - <?= htmlspecialchars($professeur['nom']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_epreuve" class="form-label">ID Épreuve :</label>
            <select id="id_epreuve" name="id_epreuve" required class="form-select">
                <option value="">-- Sélectionnez une épreuve --</option>
                <?php foreach ($epreuves as $epreuve): ?>
                    <option value="<?= htmlspecialchars($epreuve['id_epreuve']) ?>" <?= ($epreuve['id_epreuve'] == $correction['id_epreuve']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($epreuve['id_epreuve']) ?> - <?= htmlspecialchars($epreuve['nom_epreuve']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="date_correction" class="form-label">Date Correction :</label>
            <input type="date" id="date_correction" name="date_correction" value="<?= htmlspecialchars($correction['date_correction']) ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="nb_copies" class="form-label">Nombre Copies :</label>
            <input type="number" id="nb_copies" name="nb_copies" value="<?= htmlspecialchars($correction['nb_copies']) ?>" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <p class="mt-3"><a href="index.php?action=index" class="btn btn-secondary">Retour à la liste des corrections</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
