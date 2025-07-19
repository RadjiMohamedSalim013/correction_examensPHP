<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Liste des épreuves</h1>

    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="index.php?action=createForm" class="btn btn-primary btn-sm">
            Ajouter une épreuve
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom épreuve</th>
                    <th>Type épreuve</th>
                    <th>Code examen</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($epreuves) && is_array($epreuves)): ?>
                    <?php foreach ($epreuves as $epreuve): ?>
                    <tr>
                        <td><?= htmlspecialchars($epreuve['id_epreuve']) ?></td>
                        <td><?= htmlspecialchars($epreuve['nom_epreuve']) ?></td>
                        <td><?= htmlspecialchars($epreuve['type_epreuve']) ?></td>
                        <td><?= htmlspecialchars($epreuve['code_exam']) ?></td>
                        <td>
                            <a href="index.php?action=editForm&id_epreuve=<?= $epreuve['id_epreuve'] ?>" class="btn btn-sm btn-outline-primary action-btn">Modifier</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Aucune épreuve trouvée.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
