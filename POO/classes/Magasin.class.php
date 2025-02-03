<?php
class Magasin {
    private $nomMagasin = "La Case Bleue";
    private $adresse = "123 Rue Chateau";
    private $codePostal = "75001";
    private $ville = "Paris";

    // Constructeur avec paramètres
    public function __construct($nomMagasin = "La Case Bleue", $adresse = "123 Rue Chateau", $codePostal = "75001", $ville = "Paris") {
        $this->nomMagasin = $nomMagasin;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
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

    public function __cons() {
        return $this->nomMagasin . ' ' . $this->adresse . ' ' . $this->codePostal . ' ' . $this->ville;
    }
}
?>