<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
</head>

<body>

    <?php

    /*Regardez le fichier liens.txt 5(http://www.python.org/
https://fr.wikipedia.org/wiki/Joel_et_Ethan_Coen
http://fr.wikipedia.org/wiki/Sp%C4%B1n%CC%88al_Tap
https://www.theclash.com/landing/
http://theforensics.net), qui contient une liste de sites indispensables à la
compréhension du monde moderne.
Écrire un programme qui lit ce fichier et qui construit une page web contenant une
liste de liens hypertextes.
Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son
contenu sous forme de tableau. */
    $lines = file('liens.txt');
    echo '<ul>';
    foreach ($lines as $line) {
        $url = trim($line);
        echo '<li><a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($url) . '</a></li>';
    }
    echo '</ul>';

    /*Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits. 
customers.csv. Il s'agit d'un fichier CSV(C:\xampp\htdocs\init_php\init_1\Exercices_Lecture_d1_fichier) où chaque ligne représente un nouvel utilisateur. 
Les différents champs sont : customerID,companyName,contactName,contactTitle,address,city,region,postalCode,country,phone,fax.
 Ils sont séparés par une virgule . 
 1. Utilisez la fonction file() pour récupérer le contenu de ce fichier. 
 2. Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split() 
 3. Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau. */

    $fichierCsv = 'customers.csv';
    $dataCsv = file($fichierCsv);
    echo '<table class="table">';
    echo '<thead><tr><th>Customer 
          ID</th><th>Company 
          Name</th><th>Contact 
          Name</th><th>Contact 
          Title</th><th>Address</th><th>City</th><th>Region</th><th>Postal 
          Code</th><th>Country</th><th>Phone</th><th>Fax</th></tr></thead>';
    echo '<tbody>';
    foreach ($dataCsv as $line) {
        $champs = explode(',', trim($line));
        echo '<tr>';
        foreach ($champs as $champ) {
            echo '<td>' . htmlspecialchars($champ) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';



    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>