<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

   // $myVar = "Hello World!";
    // $fp = fopen('essai.txt', 'a');
    // fputs($fp, $myVar);
    // fclose($fp);
    // $fp = fopen('essai.txt', 'r');
    // // Boucle jusqu'à la fin du fichier
    // while (!feof($fp)) {
    //     // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    //     $ligne = fgets($fp, 4096);
    //     echo $ligne . "<br>";
    // }
    // $path = "/Les_Formulaires/index.php";
    // $file = basename($path); // $file retourne "index.php"

// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");
// on lit la première ligne du fichier, le résultat est stocké dans la $visiteurs
$visiteurs = fgets($fichier);
// on ajoute 1 au nombre de visiteurs
$visiteurs++;
// on se positionne au début du fichier
fseek($fichier,0);
// on écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);
// on referme le fichier moncompteur.txt
fclose($fichier);
// on indique sur la page le nombre de visiteurs
echo "$visiteurs personnes sont passées par ici";


    ?>

</body>

</html>