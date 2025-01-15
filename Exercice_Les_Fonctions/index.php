<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les_Fonctions_Exo_Calculator</title>
</head>
<body>

<?php

/*Exercice
Ecrivez la fonction calculator() traitant les opérations d'addition, 
de soustraction, de multiplication et de division. */
function calculator($x, $y, $operateurs) {
    switch ($operateurs) {
        case 'addition':
            return $x + $y;
        case 'soustraction':
            return $x - $y;
        case 'multiplication':
            return $x * $y;
        case 'division':
            if ($y != 0) {
                return $x / $y;
            } else {
                return "Erreur: Division par zéro";
            } 
        default:
            return "Erreur: Opération non valide";
    }
}
echo calculator(10, 5, 'addition')."<br>"; // Affiche 15
echo calculator(10, 5, 'soustraction')."<br>"; // Affiche 5
echo calculator(10, 5, 'multiplication')."<br>"; // Affiche 50
echo calculator(10, 5, 'division'); // Affiche 2

?>
    
</body>
</html>
