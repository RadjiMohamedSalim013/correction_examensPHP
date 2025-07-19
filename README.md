# Plateforme de Correction des Examens

## Description

Ce projet est une plateforme web pour la gestion et la correction des examens. Il permet de gérer les entités suivantes :
- Corrections
- Épreuves
- Établissements
- Examens
- Professeurs

L'interface utilisateur est construite avec PHP, Bootstrap pour le style, et utilise une architecture MVC avec des contrôleurs, modèles et vues.

## Structure du Projet

- `controllers/` : Contient les contrôleurs pour gérer la logique métier.
- `models/` : Contient les modèles représentant les entités de la base de données.
- `views/` : Contient les vues pour l'affichage, organisées par entité (correction, epreuve, etablissement, examen, professeur).
- `includes/` : Contient les fichiers inclus communs, comme le header et footer.
- `assets/` : Contient les fichiers CSS et autres ressources statiques.
- `config/` : Contient les fichiers de configuration, notamment la base de données.
- `create_tables.sql` : Script SQL pour créer les tables nécessaires à la base de données.

## Installation

1. Cloner le dépôt dans votre serveur web local (ex: `htdocs` pour XAMPP).
2. Importer la base de données en exécutant le script `create_tables.sql` dans votre gestionnaire de base de données (ex: phpMyAdmin).
3. Configurer la connexion à la base de données dans `config/databases.php`.
4. Assurez-vous que le serveur web a les droits nécessaires pour accéder aux fichiers.

## Utilisation

- Accéder à la plateforme via votre navigateur à l'adresse locale (ex: `http://localhost/projet/correction_examens/index.php`).
- Utiliser la barre de navigation pour accéder aux différentes sections : Corrections, Épreuves, Établissements, Examens, Professeurs.
- Ajouter, modifier, supprimer les entités via les formulaires disponibles.
- Les formulaires utilisent Bootstrap pour un rendu responsive et moderne.

## Dépendances

- Serveur web 
- Base de données MySQL 
- Bootstrap 5 (chargé via CDN)
- Bootstrap Icons (chargé via CDN)

## Tests

- Tester les formulaires de création et modification pour chaque entité.
- Vérifier la navigation via la barre de menu.
- S'assurer que les données sont correctement enregistrées et affichées.

