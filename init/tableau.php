

<?php

/*$tab = array(array(1, "janvier", "2016"), 
array(2, "février", "2017"), 
array(3, "mars", "2018"), 
array(4, "avril", "2019")
);

echo $tab[0][0]." ".$tab[0][1]." ".$tab[0][2]."<br>",
$tab[1][0]." ".$tab[1][1]." ".$tab[1][2]."<br>",
$tab[2][0]." ".$tab[2][1]." ".$tab[2][2]."<br>",
$tab[3][0]." ".$tab[3][1]." ".$tab[3][2]."<br>";*/

/*$tab[] = array(1, "janvier", "2016"); 
$tab[] = array(2, "février", "2017"); 
$tab[] = array(3, "mars", "2018"); 
$tab[] = array(4, "avril", "2019");

echo $tab[0][0]." ".$tab[0][1]." ".$tab[0][2]."<br>";
echo $tab[1][0]." ".$tab[1][1]." ".$tab[1][2]."<br>";
echo $tab[2][0]." ".$tab[2][1]." ".$tab[2][2]."<br>";
echo $tab[3][0]." ".$tab[3][1]." ".$tab[3][2]."<br>";*/


/*
//TABLEAUX ASSOCIATIFS
$facture[0] = 500; // représente Janvier / 500 euros 
$facture[1] = 620; // représente Février // 
//$... 
$facture[11]= 300; // représente Décembre

//ou

$facture["Janvier"] = 500; 
$facture["Février"] = 620; 
// $........ 
$facture["Décembre"] = 300;

//ou

$facture = array("Janvier" => 500, "Février" => 620, "Mars" => 700, "Décembre" => 300);
echo"Facture de Janvier : ".$facture["Janvier"]." euros<br>",
"Facture de Février : ".$facture["Février"]." euros<br>",
"Facture de Mars : ".$facture["Mars"]." euros<br>",
"Facture de Décembre : ".$facture["Décembre"]." euros<br>";*/


//TABLEAUX MULTIDIMENSIONNELS

/*    //COUNT

$mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", 
"Août", "Septembre", "Octobre", "Novembre", "Décembre"); 
echo count($mois); // Affiche 12*/

/*    //FOREACH

$factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350);
$total_annuel = 0;
foreach ($factures as $value) {
    echo $value . " &euro;<br>";
    $total_annuel += $value;
}
echo "Total annuel de vos factures téléphoniques : " . $total_annuel . " &euro;";*/



/*    //foreach ($tableau as $key => $value)


$factures = array("Janvier" => 500, "Février" => 620, "Mars" => 300, "Avril" => 130, "Mai" => 560, "Juin" => 350);
$total_annuel = 0;
foreach ($factures as $key => $value) {
    echo "Facture du mois de " . $key . " : " . $value . " € ;<br>";
    $total_annuel += $value;
}
echo "Total annuel de vos factures téléphoniques : " . $total_annuel . " &euro;";*/


      //  La fonction array_push();  Cette instruction permet d'ajouter un élément à la fin d'un tableau.

/*$tab = array("Lundi", "Mardi", "Mercredi", "Jeudi"); 
array_push($tab, "Vendredi");
echo $tab[0]."<br>"." ".$tab[1]."<br>"." ".$tab[2]."<br>"." ".$tab[3]."<br>"." ".$tab[4]."<br>";*/




?>
