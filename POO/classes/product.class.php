<?php

class Product {
    private $name;
    private $price;
    private $promotion = [];
    private $discount;

    public function __construct($name, $price, $promotion = false, $discount = 0) {
        $this->name = $name;
        $this->price = $price;
        $this->promotion = $promotion;
        $this->discount = $discount;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPromotion() {
        return $this->promotion;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setPromotion($promotion) {
        $this->promotion = $promotion;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }
    
    public function getFinalPrice() {
        if ($this->isPromotion()) {
            return $this->getPrice() - ($this->getPrice() * $this->getDiscount() / 100);
        } else {
            return $this->getPrice();
        }
    }
    public function isPromotion() {
        if ($this->promotion == "Oui") {
            return true;
        } else {
            return false;
        }
    }
    
    public function isDiscount() {
        if ($this->discount = ["20%", "33%"]) {
            return "20%";
        } else {
            return "Non";
        }
    }
}
?>