<?php
class Employe
{
    private  $Nom;
    private  $Prenom;
    private $DateEmbauche;
    private  $Fonction;
    private $Salaire;
    private  $Service;
    private $magasin; // Ajout de la propriété magasin



    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }
    public function setDateEmbauche($DateEmbauche)
    {
        $this->DateEmbauche = $DateEmbauche;
    }
    public function setFonction($Fonction)
    {
        $this->Fonction = $Fonction;
    }
    public function setSalaire($Salaire)
    {
        $this->Salaire = $Salaire;
    }
    public function setService($Service)
    {
        $this->Service = $Service;
    }
    public function setMagasin($magasin) {
        $this->magasin = $magasin;
    }

    public function getAnciennete()
    {
        $dateEmbauche = new DateTime($this->DateEmbauche);
        $dateActuelle = new DateTime();
        $interval = $dateActuelle->diff($dateEmbauche);
        return $interval->y;
    }

    public function calculerPrime()
    {
        $salaireAnnuel = $this->Salaire * 12;
        $primeSalaire = $salaireAnnuel * 0.05;
        $primeAnciennete = $salaireAnnuel * 0.02 * $this->getAnciennete();
        return $primeSalaire + $primeAnciennete;
    }

    public function verserPrime()
    {
        $dateActuelle = new DateTime();
        $dateVersement = new DateTime($dateActuelle->format('Y') . '-11-30');
        if ($dateActuelle->format('Y-m-d') == $dateVersement->format('Y-m-d')) {
            $montantPrime = $this->calculerPrime();
            echo "Ordre de transfert de $montantPrime € envoyé à la banque pour {$this->Nom} {$this->Prenom}.\n";
        } else {
            echo "Aujourd'hui n'est pas le jour de versement de la prime.\n";
        }
    }
    public function __toString() {
        // Calcul de l'ancienneté
        $dateEmbauche = new DateTime($this->DateEmbauche);
        $dateActuelle = new DateTime();
        $interval = $dateActuelle->diff($dateEmbauche);
        $anciennete = $interval->y;
    
        // Calcul de la prime (par exemple, 5% du salaire par année d'ancienneté)
        $prime = $this->Salaire * 0.05 * $anciennete;
    
        // Versement de la prime (ajoutée au salaire)
        $salaireAvecPrime = $this->Salaire + $prime;
    
        return "Nom: " . $this->Nom . 
               ", Prénom: " . $this->Prenom . 
               ", Date d'embauche: " . $this->DateEmbauche . 
               ", Fonction: " . $this->Fonction . 
               ", Salaire: " . $this->Salaire . 
               ", Service: " . $this->Service . 
               ", Ancienneté: " . $anciennete . " ans" . 
               ", Prime: " . $prime . " euros" . 
               ", Salaire avec prime: " . $salaireAvecPrime . " euros";
               ", Magasin: " . $this->magasin->getNomMagasin();
    }
    public function getNom() {
        return $this->Nom;
    }
    
    public function getPrenom() {
        return $this->Prenom;
    }
    
    public function getSalaire() {
        return $this->Salaire;
    }
    
    public function getMagasin() {
        return $this->magasin;
    }
}
