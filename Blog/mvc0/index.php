<?php 
require 'Model.php';

// accès aux données 
$billets = getBillets();


//Affichage
require 'vueAccueil.php';
?>