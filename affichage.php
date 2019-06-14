<?php
include("inc/projetCrudHead.inc.php");
    ?>

<br> <br>
<?php
echo 'Enregistrement réussi';

//Agence
if(!empty($_POST)) {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $mysqli->query("INSERT INTO agence (nom, adresse) 
      VALUES ('$nom', '$adresse')");
    header("location: affichage.php");
    exit;  
    }

    //INSERT INTO demande (genre, ville, budget, superficie, categorie) VALUES ('$type', '$ville','1500','200','vente')

?>
