<?php
require 'Model.php'; 
try { 
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec 
        $id = intval($_GET['id']); 
        if ($id != 0) { 
            $billet = getBillet($id); 
            $comments = getComments($id); 
            if ($billet && $comments) {
                require 'vueBillet.php'; 
            } else {
                throw new Exception("Erreur lors de la récupération des données");
            }
        } else {
            throw new Exception("Identifiant de billet incorrect"); 
        }
    } else {
        throw new Exception("Aucun identifiant de billet"); 
    }
} catch (Exception $e) { 
    $msgErreur = $e->getMessage(); 
    require 'vueErreur.php'; 
} 
?>