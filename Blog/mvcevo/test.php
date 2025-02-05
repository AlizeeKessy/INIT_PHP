<?php
require 'Model.php';

try {
    $bdd = getBdd();
    echo "Connexion réussie à la base de données 'boggy'.";
} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>