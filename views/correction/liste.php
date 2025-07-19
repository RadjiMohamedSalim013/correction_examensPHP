<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="h3 mb-4">Fiches de correction</h1>

    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="index.php?action=createForm" class="btn btn-primary btn-sm">
            Créer fiche (à partir des données)
        </a>
        <a href="/projet/correction_examens/views/correction/ajouter_manuellement.php" class="btn btn-outline-primary btn-sm">
            Créer fiche manuellement
        </a>
        <div class="d-inline-block">
            <a class="btn btn-outline-secondary btn-sm me-2" href="/projet/correction_examens/views/professeur/index.php?action=listProfesseurs">Professeurs</a>
            <a class="btn btn-outline-secondary btn-sm me-2" href="/projet/correction_examens/views/examen/index.php?action=index">Examens</a>
            <a class="btn btn-outline-secondary btn-sm me-2" href="/projet/correction_examens/views/epreuve/index.php?action=index">Épreuves</a>
            <a class="btn btn-outline-secondary btn-sm me-2" href="/projet/correction_examens/views/etablissement/index.php?action=index">Établissements</a>
        </div>
    </div>

    <div class="fiche-section mb-4">
        <p class="mb-0"><strong>Différence entre les méthodes :</strong><br>
        <strong>Créer fiche (à partir des données)</strong> : Utilise les données existantes (professeurs, examens...)<br>
        <strong>Créer fiche manuellement</strong> : Pour saisir toutes les informations librement</p>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Professeur</th>
                    <th>Épreuve</th>
                    <th>Date</th>
                    <th>Copies</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($corrections) && is_array($corrections)): ?>
                    <?php foreach ($corrections as $correction): ?>
                    <tr>
                        <td><?= htmlspecialchars($correction['id_correction']) ?></td>
                        <td><?= htmlspecialchars($correction['nom']) ?> <?= htmlspecialchars($correction['prenom']) ?></td>
                        <td><?= htmlspecialchars($correction['id_epreuve']) ?></td>
                        <td><?= htmlspecialchars($correction['date_correction']) ?></td>
                        <td><?= htmlspecialchars($correction['nb_copies']) ?></td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="index.php?action=editForm&id_correction=<?= $correction['id_correction'] ?>" 
                                   class="btn btn-sm btn-outline-primary action-btn">Modifier</a>
                                <a href="index.php?action=show&id_correction=<?= $correction['id_correction'] ?>" 
                                   class="btn btn-sm btn-outline-secondary action-btn">Détails</a>
                                <a href="index.php?action=delete&id_correction=<?= $correction['id_correction'] ?>" 
                                   class="btn btn-sm btn-outline-danger action-btn"
                                   onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Aucune correction disponible.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
