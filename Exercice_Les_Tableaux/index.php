<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les_Tableaux</title>
</head>
<body>
    
<?php
/*Le tableau $a ci-dessous représente les plannings de groupes de stagiaires.
 Le code 19XXX représente le numéro de groupe.
 Les positions correspondent aux numéros de semaines dans l'année (peu importe quelle année).
 Les valeurs vides ("") en début et fin de tableau indiquent respectivement que la formation n'a pas commencé / est terminée.
 Quand une formation a débuté, les cellules vides indiquent des vacances.*/

$a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", 
    "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),

    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
    "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", 
    "Stage", "Validation", ""),
    
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
    "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
);

/*Exercice 0
Testez les différents exemples du cours, à l'aide de la fonction var_dump().*/
//echo var_dump($a) . "<br>";


/*Exercice 1
Quelle semaine a lieu la validation du groupe 19002 ?*/
//$semaine_de_validation_19002 = array_search("Validation", $a["19002"]);
//echo "La validation du groupe 19002 a lieu à la semaine : " . ($semaine_de_validation_19002 + 1) . "<br>";

/*Exercice 2
Trouver la position de la dernière occurrence de Stage pour le groupe 19001. */
//$derniere_occurrence_stage_19001 = array_keys($a["19001"], "Stage");
//$position_derniere_stage_19001 = end($derniere_occurrence_stage_19001);
//echo "La dernière occurrence de Stage pour le groupe 19001 est à la position : " . ($position_derniere_stage_19001 + 1 ) . "<br>";


/*Exercice 3
Extraire, dans un nouveau tableau, les codes des groupes. */
//$codes_des_groupes = array_keys($a);
//echo "Les codes des groupes sont : " . implode(", ", $codes_des_groupes) . "<br>";

/*Exercice 4
Combien de semaines dure le stage du groupe 19003 ? */
$nombre_de_semaines_stage_19003 = count(array_keys($a["19003"], "Stage"));
echo "Le stage du groupe 19003 dure : " . $nombre_de_semaines_stage_19003 . " semaines<br>";

?>


</body>
</html>
