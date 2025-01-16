
<?php
echo '<div class="alert alert-success" role="alert">Fichier téléchargé avec succès</div>';
// var_dump($_FILES);

if ($_FILES["fichier"]["error"] != UPLOAD_ERR_OK) { 
    echo "<div class='alert alert-danger' role='alert'>Une erreur est survenue lors du téléchargement du fichier</div>";
 }
?>