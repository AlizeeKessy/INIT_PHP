<?php // Fichier 'hello.php' 
    function writeMessage($text)
    {
        $html = "<h1>" . $text . "</h1>";
        echo $html;
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion de fichiers PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php $message = "Welcome to AFPA !";
    writeMessage($message);
    ?> <br>
    <?php writeMessage("Bonjour tout le monde !"); ?>

</body>

</html>