<?php include __DIR__ . '/../../includes/header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouvel établissement | Plateforme Examens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #3498db;
            --primary-dark: #2980b9;
            --secondary: #2c3e50;
            --light: #ecf0f1;
            --dark: #34495e;
            --success: #2ecc71;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        .form-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            padding: 2.5rem;
            max-width: 720px;
            margin: 2rem auto;
            border-top: 4px solid var(--primary);
        }
        
        .form-header {
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .form-title {
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-subtitle {
            color: #7f8c8d;
            font-size: 1rem;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #dfe6e9;
            transition: all 0.2s;
            margin-bottom: 1.25rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            color: var(--secondary);
            border: 1px solid var(--secondary);
            background: transparent;
        }
        
        .btn-outline:hover {
            background-color: var(--secondary);
            color: white;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            gap: 1rem;
        }
        
        @media (max-width: 576px) {
            .form-card {
                padding: 1.5rem;
            }
            .action-buttons {
                flex-direction: column-reverse;
            }
            .action-buttons .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="form-card">
        <div class="form-header">
            <h1 class="form-title">
                <i class="bi bi-file-earmark-plus"></i> Nouvel établissement
            </h1>
            <p class="form-subtitle">Renseignez les informations de l'établissement</p>
        </div>
        
        <form method="post" action="index.php?action=create">
            <div class="mb-3">
                <label for="code_etablissement" class="form-label">
                    <i class="bi bi-code-slash" style="color: var(--primary);"></i> Code établissement
                </label>
                <input type="text" class="form-control" id="code_etablissement" name="code_etablissement" required>
            </div>
            
            <div class="mb-3">
                <label for="nom_etablissement" class="form-label">
                    <i class="bi bi-building" style="color: var(--primary);"></i> Nom établissement
                </label>
                <input type="text" class="form-control" id="nom_etablissement" name="nom_etablissement" required>
            </div>
            
            <div class="mb-3">
                <label for="ville" class="form-label">
                    <i class="bi bi-geo-alt" style="color: var(--primary);"></i> Ville
                </label>
                <input type="text" class="form-control" id="ville" name="ville" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
