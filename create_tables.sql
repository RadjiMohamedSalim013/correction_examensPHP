-- Table des établissements
CREATE TABLE etablissement (
  code_etablissement INT PRIMARY KEY AUTO_INCREMENT,
  nom_etablissement VARCHAR(100),
  ville VARCHAR(100)
);

-- Table des professeurs
CREATE TABLE professeur (
  matricule INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  grade VARCHAR(50),
  code_etablissement INT,
  FOREIGN KEY (code_etablissement) REFERENCES etablissement(code_etablissement)
);

-- Table des examens
CREATE TABLE examen (
  code_exam INT PRIMARY KEY AUTO_INCREMENT,
  nom_exam VARCHAR(100)
);

-- Table des épreuves
CREATE TABLE epreuve (
  id_epreuve INT PRIMARY KEY AUTO_INCREMENT,
  nom_epreuve VARCHAR(100),
  type_epreuve ENUM('écrit', 'oral'),
  code_exam INT,
  FOREIGN KEY (code_exam) REFERENCES examen(code_exam)
);

-- Table de correction
CREATE TABLE correction (
  id_correction INT PRIMARY KEY AUTO_INCREMENT,
  matricule INT,
  id_epreuve INT,
  date_correction DATE,
  nb_copies INT,
  FOREIGN KEY (matricule) REFERENCES professeur(matricule),
  FOREIGN KEY (id_epreuve) REFERENCES epreuve(id_epreuve)
);
