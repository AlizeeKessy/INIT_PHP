<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--les 3 façons d'écrire du texte dans le PHP-->
    <!--<?php echo "Bonjour le monde"; ?>-->
    <!--<?php echo "<h1>Bonjour le monde</h1>"; ?>-->
    <!--<h1><?php echo "Bonjour le monde"; ?></h1>-->

    <!--<? $bonjour = 'Bonjour le monde';
        echo "<b>$bonjour</b>"; ?>-->

    <?php

    //echo "Affichage d'un \t ";
    //echo "Bonjour le monde\n";

    //Le point . réalise une concaténation de deux chaînes de caractères
    /*$a = "Winter";
echo $a . " is coming !";*/

    /*$age=19;
if ($age>=18) { $reponse =  "majeur"; } Else { $reponse = "mineur"; }
echo "Vous êtes $reponse.";*/

    /*$age=19;
(($age >= 18) ? $reponse="majeur" : $reponse="mineur");
echo "Vous êtes $reponse.";*/

    /*$variable = "Afpa";
echo $variable;*/


    /*$var1 = 123; $var2 = 14.35;
echo $var1 + $var2;*/


    /*$couleur[0] = "red"; $couleur[1] = "blue"; $couleur[2] = "white"; $couleur[3] = "black";
echo $couleur[2];*/

    /* $a = $b = 2;
    function somme($a, $b)
    {
        $c = $a + $b;
        echo "$c";
    }
    somme($a, $b);*/

    /*function Test() {
        $a=0; echo $a."<br>"; $a++; }
        Test();
        Test();*/

    /*function Test1()
    {
        static $a = 0;
        echo "$a<br />";
        $a++;
    } // Appel de la fonction (3 fois) Test1();

Test1();
Test1();
Test1();*/


/*$var1 = "bonjour"; 
$$var1 = "le monde";
echo $var1.$bonjour;*/

/*$_GET["societe"] = "Afpa"; 
echo $_GET["societe"];*/


//Forcer le type d'une variable
/*$a = 15.125863; 
settype($a, "integer"); 
echo $a;*/

/*$a = 6.32172; 
$b = intval($a); 
$c = doubleval($a); 
echo $a - $b - $c;*/















    ?>




</body>

</html>