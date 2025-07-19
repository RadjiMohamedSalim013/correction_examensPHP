<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Liste des examens</h1>

    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="index.php?action=createForm" class="btn btn-primary btn-sm">
            Ajouter un examen
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-custom">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom Examen</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($examens) && is_array($examens)): ?>
                    <?php foreach ($examens as $exam): ?>
                    <tr>
                        <td><?= htmlspecialchars($exam['code_exam']) ?></td>
                        <td><?= htmlspecialchars($exam['nom_exam']) ?></td>
                        <td>
                            <a href="index.php?action=editForm&code_exam=<?= $exam['code_exam'] ?>" class="btn btn-sm btn-outline-primary action-btn">Modifier</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Aucun examen trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
