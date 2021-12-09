<?php
require_once __DIR__ . "/../classes/CartaDiCredito.php";
require_once __DIR__ . "/../classes/PayPal.php";

$pagamenti = [
    new CartaDiCredito("1234567890122375", "12 / 24"),
    new CartaDiCredito("38746278438746324", "03 / 22"),
    new PayPal("32764"),
    new PayPal("98834"),
];
