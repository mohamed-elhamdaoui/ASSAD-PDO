INSERT INTO animaux (nom, espece, alimentation, image, paysorigine, descriptioncourte, id_habitat) VALUES 
('lion', 'Lion de l\'Atlas', 'Carnivore', 'lion_atlas.jpg', 'Maroc', 'Le roi majestueux de l\'Atlas, symbole de force du Royaume.', 1),
('Amsa', 'Mouflon à manchettes', 'Herbivore', 'mouflon.jpg', 'Maroc', 'Agile grimpeur des massifs rocheux de l\'Afrique du Nord.', 1),
('Zina', 'Girafe d\'Afrique', 'Herbivore', 'girafe.jpg', 'Sénégal', 'La géante de la savane qui domine le zoo de toute sa hauteur.', 2),
('Fennec du Sud', 'Fennec', 'Omnivore', 'fennec.jpg', 'Algérie/Maroc', 'Petit renard des sables aux oreilles immenses, expert du Sahara.', 3),
('Kibo', 'Éléphant d\'Afrique', 'Herbivore', 'elephant.php', 'Kenya', 'Un colosse impressionnant, pilier de la biodiversité africaine.', 2);


INSERT INTO habitats (nom, typeclimat, description, zonezoo) VALUES 
('Montagnes de l\'Atlas', 'Montagnard / Semi-aride', 'Un environnement rocheux et frais, parfait pour les espèces d\'altitude.', 'Zone Nord'),
('Savane Subsaharienne', 'Tropical Sec', 'Vastes étendues d\'herbes hautes reproduisant les plaines d\'Afrique de l\'Est.', 'Zone Centrale'),
('Désert du Sahara', 'Aride', 'Zone sablonneuse avec oasis, adaptée aux espèces supportant de fortes chaleurs.', 'Zone Sud');

UPDATE animaux set nom = "Lion"  ,  id = 1  where id = 6;

UPDATE animaux SET nom = 'Mouflon' ,  id = 2  where id = 7 ;
UPDATE animaux SET nom = 'Girafe'  ,  id = 3  where id = 8 ;
UPDATE animaux SET nom = 'Fennec'  , id = 4  where id = 9 ;
UPDATE animaux SET nom = 'Éléphant' ,  id = 5  where id = 10 ;


select * from animaux where id = 6;



INSERT INTO visitesguidees (titre, dateheure, langue, capacite_max, statut, duree, prix, id_guide) VALUES 
('Sur les traces du Lion de l\'Atlas', '2025-12-26 10:00:00', 'Français', 15, 'disponible', 60, 80.00, 18),
-- ('Safari au cœur de la Savane', '2025-12-27 15:30:00', 'Anglais', 20, 'disponible', 90, 120.00, 11),
('Les mystères du Sahara', '2025-12-28 09:00:00', 'Arabe', 10, 'disponible', 45, 50.00, 18),
-- ('Spécial CAN 2025 : Faune du Maroc', '2026-01-10 14:00:00', 'Français', 25, 'disponible', 120, 150.00, 11),
('Aventure nocturne dans l\'Atlas', '2025-12-29 20:00:00', 'Espagnol', 12, 'disponible', 75, 100.00, 18);