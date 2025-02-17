<?php

class Category {
    // Propriété pour stocker le nom de la catégorie
    private $name;

    // Constructeur pour initialiser le nom de la catégorie
    public function __construct($name) {
        $this->name = $name;
    }

    // Méthode getter pour obtenir le nom de la catégorie
    public function getName() {
        return $this->name;
    }

    // Méthode setter pour définir le nom de la catégorie
    public function setName($name) {
        $this->name = $name;
    }
}

// Test de la classe Category

function getCategory($categories) {
    foreach ($categories as $category) {
        echo "Category: " . $category->getName() . "\n";
    }
}

?>