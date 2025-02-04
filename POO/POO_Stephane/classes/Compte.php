<?php
/**
 *Objet Compte Bancaire
 */
class Compte 
{
    //Propriétés
    /**
     *  Titulaire du Compte
     * @var string
     */
    public $titulaire;
    /**
     * Solde du Compte
     * @var float
     */
    public $solde;
 


    public function __construct($titulaire, $solde) {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    public function afficherSolde() {
        return $this->solde;
    }
}