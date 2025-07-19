<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Liste des établissements</h1>

    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="index.php?action=createForm" class="btn btn-primary btn-sm">
            Ajouter un établissement
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-custom">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($etablissements) && is_array($etablissements)): ?>
                    <?php foreach ($etablissements as $etab): ?>
                    <tr>
                        <td><?= htmlspecialchars($etab['code_etablissement']) ?></td>
                        <td><?= htmlspecialchars($etab['nom_etablissement']) ?></td>
                        <td><?= htmlspecialchars($etab['ville']) ?></td>
                        <td>
                            <a href="index.php?action=editForm&code_etablissement=<?= $etab['code_etablissement'] ?>" class="btn btn-sm btn-outline-primary action-btn">Modifier</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Aucun établissement trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
