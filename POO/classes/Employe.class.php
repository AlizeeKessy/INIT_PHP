<?php
class Employe
{
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin; // Ajout de la propriété magasin
    private $nbreEnfant;
    private $enfants = [];
    private $enfantAge;

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    public function getFonction()
    {
        return $this->fonction;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setService($service)
    {
        $this->service = $service;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setMagasin($magasin)
    {
        $this->magasin = $magasin;
    }

    public function getMagasin()
    {
        return $this->magasin;
    }
    public function setNbreEnfat($nbreEnfant)
    {
        $this->nbreEnfant = $nbreEnfant;
    }

    public function getNbreEnfant()
    {
        return $this->nbreEnfant;
    }

    public function addEnfant($nom, $enfantAge)
    {
        $this->enfants[] = ['nom' => $nom, 'age' => $enfantAge];
    }

    public function getEnfants()
    {
        return $this->enfants;
    }

    public function getAnciennete()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $dateActuelle = new DateTime();
        $interval = $dateActuelle->diff($dateEmbauche);
        return $interval->y;
    }

    public function getModeRestauration()
    {
        if ($this->magasin->getModeRestauration() == "Restaurant d'entreprise") {
            return "Les employés peuvent manger au restaurant d'entreprise.";
        } else {
            return "Les employés ont droit à des tickets restaurants.";
        }
    }

    public function getEstEligibleChequesVacances()
    {
        if ($this->getAnciennete() >= 1) {
            return "est élégible aux chèques vacances";
        } else {
            return "n'est pas élégible aux chèques vacances";
        }
    }
    public function getChequesNoel()
    {
        $cheques = ['20€' => 0, '30€' => 0, '50€' => 0];
        foreach ($this->enfants as $enfant) {
            if ($enfant['age'] >= 0 && $enfant['age'] <= 10) {
                $cheques['20€']++;
            } elseif ($enfant['age'] >= 11 && $enfant['age'] <= 15) {
                $cheques['30€']++;
            } elseif ($enfant['age'] >= 16 && $enfant['age'] <= 18) {
                $cheques['50€']++;
            }
        }
        return $cheques;
    }

    public function estEligibleChequesNoel()
    {
        return !empty($this->enfants);
    }

    public function __toString()
    {
        $chequesNoel = $this->getChequesNoel();
        $chequesNoelStr = "20€: " . $chequesNoel['20€'] . ", 30€: " . $chequesNoel['30€'] . ", 50€: " . $chequesNoel['50€'];
        return "Nom: " . $this->nom . "<br>" .
            " Prénom: " . $this->prenom . "<br>" .
            " Date d'embauche: " . $this->dateEmbauche . "<br>" .
            " Fonction: " . $this->fonction . "<br>" .
            " Salaire: " . $this->salaire . "<br>" .
            " Service: " . $this->service . "<br>" .
            " Magasin: " . $this->magasin->getNomMagasin() . "<br>" .
            " Mode de restauration: " . $this->getModeRestauration() . "<br>" .
            " Eligible aux chèques-vacances: " . ($this->getEstEligibleChequesVacances() ? "Oui" : "Non") . "<br>" .
            " Chèques Noël: " . ($this->getChequesNoel() ? "Oui" : "Non");
    }
}
