<?php
require_once("classes\Employe.class.php");  
require_once("classes\Magasin.class.php");  

$p = new Employe(); 
$p->setNom("BEZOZ"); 
$p->setPrenom("Jeff"); 
$p->setDateEmbauche("10-05-2014");
$p->setFonction("Chef de Projet");
$p->setSalaire("3000");
$p->setService("Commercial");

// Création de l'objet Magasin avec le mode de restauration
$m = new Magasin("La Case Bleue", "123 Rue Exemple", "75001", "Paris", "Restaurant d'entreprise");

// Rattacher l'employé au magasin
$p->setMagasin($m);

// Calcul de l'ancienneté et de la prime
$anciennete = $p->getAnciennete();
$prime = $p->getSalaire() * 0.05 * $anciennete;
$salaireAvecPrime = $p->getSalaire() + $prime;

// Définir la date actuelle
$dateActuelle = new DateTime();
$dateVersement = $dateActuelle->format('Y') . '-11-30';

echo $p . "<br>";
echo "Ordre de transfert de $prime € envoyé à la banque pour " . $p->getNom() . " " . $p->getPrenom() . " pour la date du $dateVersement.<br>";

?>