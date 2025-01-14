<?php

// date("d/m/Y");
// date("H:i:s");
// echo "Nous sommes le " . date("d/m/Y")."<br>";
// echo "Il est :" . date("H:i:s");



// L'objet DateTime
// on déclare une instance de l'objet PHP 'DateTime' : 
// $oDate = new DateTime();
// echo var_dump($oDate);



// $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple) 
// $macolonne_sql = '2018-11-16 11:26:51';
// $oDate = new DateTime($macolonne_sql); 
// echo $oDate->format("d/m/Y H:i:s");


/*Exercices 
/* Utilisez l'objet DateTime, sauf mention contraire. */ 

//  Trouvez le numéro de semaine de la date suivante : 14/07/2019. 
$date = DateTime::createFromFormat('d/m/Y', '14/07/2019');
echo "Numéro de semaine : " . $date->format("W") . "<br>";

// //  Combien reste-t-il de jours avant la fin de votre formation ? 
// $endDate = new DateTime('2023-12-31'); // Replace with your actual end date
// $now = new DateTime();
// $interval = $now->diff($endDate);
// echo "Jours restants avant la fin de la formation : " . $interval->days . "<br>";

// //  Comment déterminer si une année est bissextile ? 
// $year = 2024; // Replace with the year you want to check
// $isLeap = (new DateTime("$year-01-01"))->format('L');
// echo "L'année $year " . ($isLeap ? "est" : "n'est pas") . " bissextile<br>";

// //  Montrez que la date du 32/17/2019 est erronée. 
// $dateString = '32/17/2019';
// $date = DateTime::createFromFormat('d/m/Y', $dateString);
// $errors = DateTime::getLastErrors();
// if ($errors['warning_count'] > 0 || $errors['error_count'] > 0) {
// 	echo "La date $dateString est erronée<br>";
// }

// //  Affichez l'heure courante sous cette forme : 11h25. 
// echo "Heure courante : " . date("H\hi") . "<br>";

// //  Ajoutez 1 mois à la date courante. 
// $now = new DateTime();
// $now->modify('+1 month');
// echo "Date après ajout d'un mois : " . $now->format('d/m/Y') . "<br>";

// //  Que s'est-il passé le 1000200000 ? 
// $timestamp = 1000200000;
// $date = (new DateTime())->setTimestamp($timestamp);
// echo "Le timestamp $timestamp correspond à la date : " . $date->format('d/m/Y H:i:s') . "<br>";





?>