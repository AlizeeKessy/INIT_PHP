<?php
class Magasin {
    private $nomMagasin;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration; // Ajout de la propriété modeRestauration

    // Constructeur avec paramètres
    public function __construct($nomMagasin = "La Case Bleue", $adresse = "123 Rue Chateau", $codePostal = "75001", $ville = "Paris", $modeRestauration = "Tickets Restaurants") {
        $this->nomMagasin = $nomMagasin;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }

    public function getNomMagasin() {
        return $this->nomMagasin;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getModeRestauration() {
        return $this->modeRestauration;
    }

    public function setNomMagasin($nomMagasin) {
        $this->nomMagasin = $nomMagasin;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setModeRestauration($modeRestauration) {
        $this->modeRestauration = $modeRestauration;
    }

    public function getModeRestaurationDescription() {
        if ($this->modeRestauration = true) {
            return "Les employés peuvent manger au restaurant d'entreprise.";
        } else {
            return "Les employés ont droit à des tickets restaurants.";
        }
    }

    public function __toString() {
        return $this->nomMagasin . ' ' . $this->adresse . ' ' . $this->codePostal . ' ' . $this->ville . ' ' . $this->modeRestauration;
    }
}
?>