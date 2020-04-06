<?php
$user = 'root';
$pass = '';

$dbh = new PDO('mysql:host=localhost;dbname=les_recettes', $user, $pass);


$nom_recette = $_POST['nom_recette'];
$temps_recette = $_POST['temps_recette'];
$desc_recette = $_POST['desc_recette'];

$req = $dbh->prepare("INSERT INTO recette(nom_recette, temps_recette, desc_recette)
                    VALUES(:nom_recette, :temps_recette, :desc_recette)");


$req->execute(array(
    'nom_recette' => $nom_recette,
    'temps_recette' => $temps_recette,
    'desc_recette' => $desc_recette));

    header('Location: index.php');