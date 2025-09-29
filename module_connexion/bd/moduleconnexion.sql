-- ● id, int, clé primaire et Auto Incrément
-- ● login, varchar de taille 255
-- ● prenom, varchar de taille 255
-- ● nom, varchar de taille 255
-- ● password, varchar de taille 255


-- // cree une base de donnee 
CREATE DATABASE moduleconnexion;
 
-- // cree une table utilisateurs

CREATE TABLE utilisateurs (
  'id' INT AUTO_INCREMENT PRIMARY KEY,
  'login' VARCHAR(100) NOT NULL UNIQUE,
  'prenom' VARCHAR(100) NOT NULL,
  'nom' VARCHAR(100) NOT NULL,
  'password' VARCHAR(255) NOT NULL
) ;

-- // cree un admin 

INSERT INTO utilisateurs (login, prenom, nom, password) VALUES
('admin', 'admin', 'admin', 'admin');


-- // supprimer toutes les données


TRUNCATE TABLE `utilisateurs`;



