<?php include __DIR__ . '/../../includes/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiche Correction #<?= htmlspecialchars($info['id_correction']) ?></title>

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
            min-height: 100vh;
        }
        .fiche-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 700px;
            margin: 0 auto;
        }
        .fiche-header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 20px;
        }
        .fiche-title {
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .fiche-body {
            padding: 25px;
        }
        .info-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #3498db;
        }
        .info-card h3 {
            color: #2c3e50;
            font-size: 1rem;
            margin-top: 0;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .info-card h3 i {
            margin-right: 8px;
            color: #3498db;
        }
        .info-row {
            display: flex;
            margin-bottom: 8px;
        }
        .info-label {
            width: 150px;
            font-weight: 500;
            color: #7f8c8d;
        }
        .info-value {
            flex: 1;
            color: #2c3e50;
        }
        .back-btn {
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 20px;
            margin-top: 15px;
            transition: all 0.3s;
        }
        .back-btn:hover {
            background: #3498db;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="fiche-container">
        <div class="fiche-header">
            <h1 class="fiche-title">Fiche Correction #<?= htmlspecialchars($info['id_correction']) ?></h1>
        </div>
        
        <div class="fiche-body">
            <div class="info-card">
                <h3><i class="bi bi-person"></i> Professeur</h3>
                <div class="info-row">
                    <span class="info-label">Nom complet</span>
                    <span class="info-value"><?= htmlspecialchars($info['prenom_prof']) ?> <?= htmlspecialchars($info['nom_prof']) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Grade</span>
                    <span class="info-value"><?= htmlspecialchars($info['grade']) ?></span>
                </div>
            </div>
            
            <div class="info-card">
                <h3><i class="bi bi-building"></i> Établissement</h3>
                <div class="info-row">
                    <span class="info-label">Établissement</span>
                    <span class="info-value"><?= htmlspecialchars($info['nom_etablissement']) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Ville</span>
                    <span class="info-value"><?= htmlspecialchars($info['ville']) ?></span>
                </div>
            </div>
            
            <div class="info-card">
                <h3><i class="bi bi-journal-text"></i> Examen</h3>
                <div class="info-row">
                    <span class="info-label">Code</span>
                    <span class="info-value"><?= htmlspecialchars($info['code_exam']) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Nom</span>
                    <span class="info-value"><?= htmlspecialchars($info['nom_exam']) ?></span>
                </div>
            </div>
            
            <div class="info-card">
                <h3><i class="bi bi-file-earmark-text"></i> Épreuve</h3>
                <div class="info-row">
                    <span class="info-label">Nom épreuve</span>
                    <span class="info-value"><?= htmlspecialchars($info['nom_epreuve']) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Type</span>
                    <span class="info-value"><?= htmlspecialchars($info['type_epreuve']) ?></span>
                </div>
            </div>
            
            <div class="info-card">
                <h3><i class="bi bi-check-circle"></i> Correction</h3>
                <div class="info-row">
                    <span class="info-label">Date</span>
                    <span class="info-value"><?= htmlspecialchars($info['date_correction']) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Nombre copies</span>
                    <span class="info-value"><?= htmlspecialchars($info['nb_copies']) ?></span>
                </div>
            </div>
            
            <div class="text-end">
                <a href="index.php" class="btn back-btn">Retour aux fiches</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>