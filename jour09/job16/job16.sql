-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- létage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”




--  le nom de la salle (renommé "Biggest Room"),
SELECT salles.nom AS "Biggest Room", salles.capacite, etage.nom AS etage 

FROM salles salles 
-- On fait une jointure avec la table des étages (alias e) La condition relie chaque salle à l’étage où elle se trouve
JOIN etage etage ON salles.id_etage = etage.id 
-- On garde seulement la ou les salles ont la capacité est égale à la capacité maximale parmi toutes les salles et on calcule la capacité maximale existante
WHERE salles.capacite = ( SELECT MAX(capacite) FROM salles );