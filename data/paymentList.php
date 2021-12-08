<?php
require_once __DIR__ . "/../classes/CartaDiCredito.php";
require_once __DIR__ . "/../classes/PayPal.php";

$pagamenti = [
    new CartaDiCredito("1234567890122", "12 / 24"),
    new CartaDiCredito("3874628746324", "03 / 22"),
    new PayPal("32764"),
    new PayPal("98834"),
];
