<?php 
require 'Model.php';

try {
    $billets = getBillets();
    // Affichage
    require 'vueAccueil.php';
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
?>