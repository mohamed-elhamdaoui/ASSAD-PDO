

-- 1. Table : habitats
-- Rôle : Zones géographiques du zoo
CREATE TABLE habitats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    typeclimat VARCHAR(100) NOT NULL,
    description TEXT,
    zonezoo VARCHAR(100) NOT NULL
) ENGINE=InnoDB;


-- 2. Table : animaux
-- Rôle : Inventaire des animaux avec lien vers l'habitat
CREATE TABLE animaux (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    espece VARCHAR(100) NOT NULL,
    alimentation VARCHAR(100),
    image VARCHAR(255),
    paysorigine VARCHAR(100),
    descriptioncourte VARCHAR(255),
    id_habitat INT,
    FOREIGN KEY (id_habitat) REFERENCES habitats(id) ON DELETE SET NULL
) ENGINE=InnoDB;


-- 3. Table : utilisateurs
-- Rôle : Gestion des comptes (Admin, Guide, Visiteur)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    role ENUM('Admin', 'Guide', 'Visiteur') NOT NULL DEFAULT 'Visiteur',
    motpasse_hash VARCHAR(255) NOT NULL,
    status_approbation TINYINT(1) DEFAULT 0 -- 0: Attente (pour guides), 1: Approuvé
) ENGINE=InnoDB;

-- 4. Table : visitesguidees
-- Rôle : Sessions de visites virtuelles créées par les guides
CREATE TABLE visitesguidees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    dateheure DATETIME NOT NULL,
    langue VARCHAR(50) NOT NULL,
    capacite_max INT NOT NULL,
    statut ENUM('disponible', 'annulée', 'terminée') DEFAULT 'disponible',
    duree INT NOT NULL, -- en minutes
    prix DECIMAL(10, 2) NOT NULL,
    id_guide INT,
    FOREIGN KEY (id_guide) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- 5. Table : etapesvisite
-- Rôle : Parcours détaillé d'une visite
CREATE TABLE etapesvisite (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titreetape VARCHAR(150) NOT NULL,
    descriptionetape TEXT,
    ordreetape INT NOT NULL,
    id_visite INT,
    FOREIGN KEY (id_visite) REFERENCES visitesguidees(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- 6. Table : reservations
-- Rôle : Inscriptions des visiteurs aux visites
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisite INT,
    idutilisateur INT,
    nbpersonnes INT NOT NULL DEFAULT 1,
    datereservation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idvisite) REFERENCES visitesguidees(id) ON DELETE CASCADE,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- 7. Table : commentaires
-- Rôle : Avis et notes laissés par les visiteurs
CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisitesguides INT,
    idutilisateur INT,
    note INT CHECK (note >= 1 AND note <= 5),
    texte TEXT,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idvisitesguides) REFERENCES visitesguidees(id) ON DELETE CASCADE,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB;





