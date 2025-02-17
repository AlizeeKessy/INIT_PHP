<?php
require_once("classes/category.class.php");
require_once("classes/product.class.php");

// Exemple d'utilisation

// Création de catégories
$category1 = new Category( "Spectacles Rodez");
$category2 = new Category( "Ordinateurs Portables");

// Création de produits
$product1 = new Product("MICHAËL GREGORIO", 43.00,  "Non", "Non");
$product2 = new Product("DANIEL GUICHARD", 43.00,  "Non", "20%");
$product3 = new Product("PC Portable Gaming MSI GL75 Leopard 10SFK-457FR 17,3\" Intel Core i7 16 Go RAM 256 Go SSD + 1 To SATA Noir", 1999.99,  "Oui", "20%");
$product4 = new Product("PC Portable Gaming Asus TUF505DV-HN232T 15.6\" AMD Ryzen 7 16 Go RAM 512 Go SSD Noir", 1499.99, "Oui", "33%");
$product5 = new Product("PC Portable Gaming Acer Predator Triton 700 PT715-51-76D4 15.6\" Gaming Intel Core i7 32 Go RAM 256 Go SSD + 256 Go SATA Noir", 3499.99,  "Non", "Non");

//  fonction getCategory
function getCategory($categories) {
    foreach ($categories as $category) {
        echo "Category: " . $category->getName() . "\n";
    }
}

//  fonction getProducts
function getProducts($products) {
    foreach ($products as $product) {
        echo "Product: " . $product->getName() . "\n";
    }
}



