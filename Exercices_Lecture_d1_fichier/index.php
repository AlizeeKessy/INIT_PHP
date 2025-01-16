<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

/*Regardez le fichier lien.txt 5(http://www.python.org/
https://fr.wikipedia.org/wiki/Joel_et_Ethan_Coen
http://fr.wikipedia.org/wiki/Sp%C4%B1n%CC%88al_Tap
https://www.theclash.com/landing/
http://theforensics.net), qui contient une liste de sites indispensables à la
compréhension du monde moderne.
Écrire un programme qui lit ce fichier et qui construit une page web contenant une
liste de liens hypertextes.
Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son
contenu sous forme de tableau. */
$lines = file('lien.txt');
echo '<ul>';
foreach ($lines as $line) {
    $url = trim($line);
    echo '<li><a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($url) . '</a></li>';
}
echo '</ul>';

?>
    
</body>
</html>