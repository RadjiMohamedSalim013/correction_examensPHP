<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Correction examens</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/projet/correction_examens/assets/styles.css" rel="stylesheet">
  <style>
    .navbar-custom {
      background-color: #2c3e50; 
    }
    .header-title {
      color: #f4f5f7ff;
      font-weight: 600;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    .navbar-custom .nav-link {
      color: rgba(255,255,255,0.85);
      transition: color 0.3s;
    }
    .navbar-custom .nav-link:hover {
      color: white;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
      <div class="container">
        <a class="navbar-brand" href="/projet/correction_examens/index.php">
          <span class="header-title">Plateforme de correction des examens</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/projet/correction_examens/views/correction/index.php">Correction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projet/correction_examens/views/epreuve/index.php">Épreuve</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projet/correction_examens/views/etablissement/index.php">Établissement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projet/correction_examens/views/examen/index.php">Examen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projet/correction_examens/views/professeur/index.php">Professeur</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
      dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl)
      })
    });
  </script>
</body>
</html>
