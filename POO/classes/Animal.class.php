<?php 
class Animal 
{
    public $_espece; public 
    $_regimeAlimentaire;
    public $espece; 
    private $taille; 
    private $poids; 
    private $nbpattes;

    public function __construct($espece, $regimeAlimentaire, $taille, $poids, $nbpattes) {
        $this->_espece = $espece;
        $this->_regimeAlimentaire = $regimeAlimentaire;
        $this->taille = $taille;    
        $this->poids = $poids;
        $this->nbpattes = $nbpattes;
    }

    public function manger() {
         // ... 
         } 
         public function avancer(int $nbpas) 
         { // ... 
            }
    } 
    ?>