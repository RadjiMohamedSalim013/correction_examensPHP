<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout manuel de correction | Plateforme Examens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #3498db;
            --primary-dark: #2980b9;
            --secondary: #2c3e50;
            --light: #ecf0f1;
            --dark: #34495e;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            padding: 2.5rem;
            max-width: 800px;
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
        
        .form-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: 8px;
            background-color: #f8fafc;
            border-left: 3px solid var(--primary);
        }
        
        .section-title {
            color: var(--secondary);
            font-weight: 500;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #dfe6e9;
            margin-bottom: 1.25rem;
            transition: all 0.2s;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.2);
        }
        
        .btn-submit {
            background-color: var(--primary);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-submit:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .btn-back {
            color: var(--secondary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-back:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .radio-group {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.25rem;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .radio-option input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
            .radio-group {
                flex-direction: column;
                gap: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">
                <i class="bi bi-file-earmark-plus"></i> Ajout manuel de correction
            </h1>
        </div>
        
        <form action="../../controllers/correction_formulaire_manuel.php" method="POST">
            <!-- Établissement -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="bi bi-building"></i> Établissement
                </h3>
                
                <div class="mb-3">
                    <label for="nom_etablissement" class="form-label">Nom de l'établissement</label>
                    <input type="text" class="form-control" id="nom_etablissement" name="nom_etablissement" required>
                </div>
                
                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
            </div>
            
            <!-- Professeur -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="bi bi-person-badge"></i> Professeur
                </h3>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nom_professeur" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom_professeur" name="nom_professeur" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="prenom_professeur" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom_professeur" name="prenom_professeur" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="grade_professeur" class="form-label">Grade</label>
                    <input type="text" class="form-control" id="grade_professeur" name="grade_professeur" required>
                </div>
            </div>
            
            <!-- Examen -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="bi bi-journal-text"></i> Examen
                </h3>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="code_exam" class="form-label">Code de l'examen</label>
                        <input type="text" class="form-control" id="code_exam" name="code_exam" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="nom_exam" class="form-label">Nom de l'examen</label>
                        <input type="text" class="form-control" id="nom_exam" name="nom_exam" required>
                    </div>
                </div>
            </div>
            
            <!-- Épreuve -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="bi bi-file-earmark-text"></i> Épreuve
                </h3>
                
                <div class="mb-3">
                    <label for="nom_epreuve" class="form-label">Nom de l'épreuve</label>
                    <input type="text" class="form-control" id="nom_epreuve" name="nom_epreuve" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Type d'épreuve</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="type_ecrit" name="type_epreuve" value="Écrit" required>
                            <label for="type_ecrit">Écrit</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="type_oral" name="type_epreuve" value="Oral">
                            <label for="type_oral">Oral</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Correction -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="bi bi-check-circle"></i> Correction
                </h3>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="date_correction" class="form-label">Date de correction</label>
                        <input type="date" class="form-control" id="date_correction" name="date_correction" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="nb_copies" class="form-label">Nombre de copies</label>
                        <input type="number" class="form-control" id="nb_copies" name="nb_copies" min="1" required>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mt-4">
                <button type="submit" class="btn btn-submit">
                    <i class="bi bi-check-lg"></i> Enregistrer
                </button>
                
                <a href="liste.php" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Retour à la liste
                </a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Définir la date du jour par défaut
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('date_correction').value = today;
            
            // Focus sur le premier champ
            document.getElementById('nom_etablissement').focus();
        });
    </script>
</body>
</html>