<?php
require 'vue/bdd.php';

$id = $_GET['id'];

$dbh->query( "DELETE from recette where id_recette = '$id' ");




header('Location: index.php');

