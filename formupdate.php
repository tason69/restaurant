<?php
require 'vue/bdd.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
   echo "l'Id n'est pas défini";
}

if (isset($_POST)) {
    $new_nom = $_POST['nom_recette'];
    $new_temps = $_POST['temps_recette'];
    $new_desc = $_POST['desc_recette'];

   
   
} else {
    echo "Post ou id_perso n'est pas défini";
}

$request = $dbh->prepare("UPDATE recette SET nom_recette='$new_nom',temps_recette=$new_temps, desc_recette='$new_desc' WHERE id_recette=$id");

$request->execute(array(
    'new_nom_recette' => $new_nom,
    'new_temps_recette' => $new_temps,
    'new_desc_recette' => $new_desc
));

//header('Location: index.php');