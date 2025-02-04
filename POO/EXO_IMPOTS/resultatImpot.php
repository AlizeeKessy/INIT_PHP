<?php
require_once 'impot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom']) && isset($_POST['revenu'])) {
        $nom = $_POST['nom'];
        $revenu = $_POST['revenu'];

        $impot = new Impot($nom, $revenu);
        echo $impot->AfficheImpot();
    } else {
        echo "Veuillez fournir un nom et un revenu.";
    }
}
?>