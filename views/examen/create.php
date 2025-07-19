<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="form-card">
    <div class="form-header">
        <h1 class="form-title">
            <i class="bi bi-file-earmark-plus"></i> Nouvel examen
        </h1>
        <p class="form-subtitle">Renseignez les informations de l'examen</p>
    </div>

    <form action="index.php?action=create" method="post">
        <div class="mb-3">
            <label for="code_exam" class="form-label">
                <i class="bi bi-code-slash" style="color: var(--primary);"></i> Code de l'examen
            </label>
            <input type="text" class="form-control" id="code_exam" name="code_exam" required>
        </div>

        <div class="mb-3">
            <label for="nom_exam" class="form-label">
                <i class="bi bi-journal-text" style="color: var(--primary);"></i> Nom de l'examen
            </label>
            <input type="text" class="form-control" id="nom_exam" name="nom_exam" required>
        </div>

        <div class="action-buttons">
            <a href="index.php" class="btn btn-outline">
                <i class="bi bi-arrow-left"></i> Annuler
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg"></i> Enregistrer
            </button>
        </div>
    </form>
</div>