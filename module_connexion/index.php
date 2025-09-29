<?php
require_once 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../module_connexion/css/acceuil.css">
    <title>page d’accueil</title>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <section id="description-d">
        <h3>les dinosaures</h3>
        <p>🌍 Origine et époque

            Les dinosaures sont des reptiles terrestres apparus il y a environ 230 millions d’années, durant le Trias.

            Ils ont dominé la Terre pendant plus de 160 millions d’années, jusqu’à leur extinction il y a environ 66 millions d’années (fin du Crétacé).</p>

        <p> 🦕 Types de dinosaures.

            On distingue deux grands groupes :

            Saurischiens → hanches de « lézards »

            Théropodes : carnivores comme le Tyrannosaurus rex ou le Velociraptor.

            Sauropodes : herbivores géants au long cou, comme le Brachiosaurus.

            Ornithischiens → hanches de « oiseaux »

            Herbivores variés : Tricératops, Stegosaurus, Ankylosaurus… </p>

        <p> 🍃 Mode de vie

            Certains étaient carnivores (chasseurs ou charognards).

            D’autres étaient herbivores et vivaient souvent en troupeaux.

            Ils avaient des tailles très variées : de quelques dizaines de centimètres à plus de 30 mètres de long.</p>

        <p> 💥 Extinction

            La cause principale de leur disparition est liée à la chute d’un astéroïde au Mexique (cratère de Chicxulub) combinée à une forte activité volcanique.

            Cela a entraîné un changement climatique brutal, rendant la Terre inhabitable pour la plupart d’entre eux.</p>
        <p>🐦 Héritage
            Tous les dinosaures n’ont pas disparu !

            Les scientifiques considèrent aujourd’hui que les oiseaux modernes sont des descendants directs des dinosaures théropodes.</p>

        <p> 👉 En résumé :
            Les dinosaures étaient une grande famille de reptiles très diversifiés, ayant régné sur la Terre pendant des millions d’années. Leur extinction soudaine a laissé la place à l’essor des mammifères… et donc à l’apparition de l’être humain bien plus tard.
        </p>
    </section>

</body>

</html>