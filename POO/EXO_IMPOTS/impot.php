<?php
class Impot {
    private $nom;
    private $revenu;

    const TAUX_IMPOT_INF = 0.15;
    const TAUX_IMPOT_SUP = 0.20;

    public function __construct($nom, $revenu) {
        $this->nom = $nom;
        $this->revenu = $revenu;
    }

    public function CalculImpot() {
        if ($this->revenu <= 15000) {
            return $this->revenu * self::TAUX_IMPOT_INF;
        } else {
            return $this->revenu * self::TAUX_IMPOT_SUP;
        }
    }

    public function AfficheImpot() {
        $impot = $this->CalculImpot();
        return "Mr/Mme " . $this->nom . ", votre impôt est de " . $impot . " euros.";
    }
}
?>