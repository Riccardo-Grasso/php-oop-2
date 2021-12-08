<?php
require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/ProductTech.php";
require_once __DIR__ . "/../classes/ProductClothes.php";

$prodotti = [
    new ProductTech("tech", "Iphone 13", "1300 €", "Apple", "Smartphone", "24 mesi"),
    new ProductTech("tech", "Mi Band 6", "40 €", "Xiaomi", "Smartwatch", "24 mesi"),
    new ProductClothes("clothes", "Stivali Alti", "120 €", "Oxe", "Scarpe", "37"),
    new ProductClothes("clothes", "Scarpe da corsa", "100 €", "Nike", "Scarpe", "44"),
    new ProductClothes("clothes", "T-Shirt maniche corte", "120 €", "Oxe", "Abbigliamento", "M"),
    new ProductClothes("clothes", "Felpa con cappuccio", "80 €", "Adidas", "Abbigliamento", "L"),
    new ProductTech("tech", "HP Envy 12", "1200 €", "HP", "Laptop", "24 mesi"),
    new ProductTech("tech", "PowerBank", "50 €", "INIU", "PowerBank", "12 mesi"),
];
