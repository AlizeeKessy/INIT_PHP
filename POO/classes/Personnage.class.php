<?php

/* 1 - Dans un dossier nommé POO, créez un dossier classes/ 
dans lequel vous créez un fichier Personnage.class.php. 
2 - Créez une classe Personnage qui comprend les attributs suivants: 
 nom
 prenom 
 age 
 sexe 
Votre classe doit encpsuler les attributs à l'aide de propriétés privée
s et utiliser des accesseurs pour permettre l'accès aux attributs. 
3 - Créez un deuxième fichier MonPerso.php permettant de vérifier le bon*/


class Personnage {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($nom) {
        $this->nom = $nom;
    }


    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }


    public function setAge($age) {
        $this->age = $age;
    }


    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function __toString() {
        return $this->nom . ' ' . $this->prenom;
    }
}

  
?>