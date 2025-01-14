<?php
/*$prenom = "Dave";
function bonjour($prenom)
{
    echo "Bonjour"." ".$prenom;
}

bonjour ($prenom);
*/

/*function bonjour($prenom, $nom) { 
    echo "Bonjour ".$prenom." ".$nom; 
}

// Appel de la fonction avec des arguments
$prenom = "Dave"; 
$nom = "Loper";
bonjour($prenom, $nom);*/


function addition($entier1, $entier2)
{
    $resultat = $entier1 + $entier2;
    return $resultat;
}
$resultat = addition(1, 2); 
//echo $resultat; // affichera 3
echo addition(1, 2);