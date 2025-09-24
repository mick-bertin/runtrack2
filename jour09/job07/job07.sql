
Ecrivez dans le fichier “job07.sql” une requête permettant de sélectionner l’ensemble
des informations des étudiants qui ont plus de 18 ans.

SELECT * FROM `etudiants` WHERE `naissance` <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
