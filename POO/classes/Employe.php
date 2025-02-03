<?php
require_once("Employe.class.php");  
require_once("Magasin.class.php");  
$p = new Employe(); 
$p->setNom("BEZOZ"); 
$p->setPrenom("Jeff"); 
$p->setDateEmbauche("10-05-2014");
$p->setFonction("Chef de Projet");
$p->setSalaire("1000");
$p->setService("Commercial");

// Calcul de l'ancienneté et de la prime
$anciennete = $p->getAnciennete();
$prime = $p->getSalaire() * 0.05 * $anciennete;
$salaireAvecPrime = $p->getSalaire() + $prime;

// Définir la date actuelle
$dateActuelle = new DateTime();
$dateVersement = $dateActuelle->format('Y') . '-11-30';

echo $p;
echo ".\nOrdre de transfert de $prime € envoyé à la banque pour " . $p->getNom() . " " . $p->getPrenom() . " pour la date du $dateVersement.\n";

$m = new Magasin();
// Récupérer le nom du magasin
echo "\n" . "Nom du magasin: " . $m->getNomMagasin() ;

?>

