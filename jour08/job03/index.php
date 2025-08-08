<!-- // Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton// submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de// session. Afficher l’ensemble des prénoms.// Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.session_start();// $_POST['prenom'] =>
 $prenom; // $keys = [//'valeur' =>
 $key,//'valeur' =>
 $key1// ];// $variable = "";// https://apprendre-php.com/tutoriels/tutoriel-12-traitement-des-formulaires-avec-get-et-post.html// https://apcpedagogie.com/recuperation-des-donnees-du-formulaire-en-php/// $keys =[//'prenom'=>
 $prenom ];// if (isset($_POST['envoyer'])){//// $_Session['prenom']=[] ;//echo $_POST['prenom'];// }// else {  // } -->

<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php
session_start();

// Si un prenom a ete saisi
if (isset($_POST["prenom"])) {
    // Recuperer la valeur du champ prenom
    $prenom = $_POST["prenom"];

    // Si la liste des prenoms n existe pas encore dans la session
    if (!isset($_SESSION["prenoms"])) {

        // Cree un tableau vide
        $_SESSION["prenoms"] = [];
    }
}




if (isset($_POST["reset"])) {
    session_unset();
}

?>

<html>

<head>

</head>

<body>
    <form method="POST" action="">
        <input type="text" placeholder="value" name="prenom">
        </input>
        <button type="submit" name="envoyer" value="submit">Envoyer</button>
        <input type="submit" value='reset' name='reset'>
    </form>

    <ul><?php
        foreach ($_SESSION["prenoms"] as $prenom):
        ?>

            <li><?php echo $prenom;
                ?>
            </li>
        <?php endforeach; ?>
    </ul>

    </form>

</html>