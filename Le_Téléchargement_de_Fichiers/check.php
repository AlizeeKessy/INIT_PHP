
<?php
echo '<div class="alert alert-success" role="alert">Fichier téléchargé avec succès</div>';
//var_dump($_FILES);

if ($_FILES["fichier"]["error"] != UPLOAD_ERR_OK) {
    echo "<div class='alert alert-danger' role='alert'>Une erreur est survenue lors du téléchargement du fichier</div>";
}

// On met les types autorisés dans un tableau (ici pour une image) 
$aMimeTypes = ["img/gif", "img/jpeg", "img/pjpeg", "img/png", "img/x-png", "img/tiff"];
// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);
if (in_array($mimetype, $aMimeTypes)) {
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir déplacer et renommer le fichier */
} else {
    // Le type n'est pas autorisé, donc ERREUR

    echo "Type de fichier non autorisé";
    exit;
}

?>