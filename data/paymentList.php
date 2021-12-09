<?php
require_once __DIR__ . "/../classes/CartaDiCredito.php";
require_once __DIR__ . "/../classes/PayPal.php";

$pagamenti = [];

function setPayment($val, $type, &$pagamenti)
{
    if (!is_numeric($val)) {
        $val = 0;
        if ($type == "CC") {
            $pagamenti[] = new CartaDiCredito($val, $type);
        } else {
            $pagamenti[] = new PayPal($val, $type);
        }
        throw new Exception("Numero Carta di Credito non valido, è stato inserito un numero  provvisorio: 0");
    } else {
        if ($type == "CC") {
            $pagamenti[] = new CartaDiCredito($val, $type);
        } else {
            $pagamenti[] = new PayPal($val, $type);
        }
    }
}

$numeriCarte = [
    ["n" => "wdtsd", "expire" => "12 / 24"],
    ["n" => "5234564534223375", "expire" => "02 / 22"],
    "32764", "98834"
];


foreach ($numeriCarte as $numero) {
    $val;
    $type;
    if (is_array($numero)) {
        $val = $numero["n"];
        $type = "CC";
    } else {
        $val = $numero;
        $type = "PayPal";
    }

    try {
        setPayment($val, $type, $pagamenti);
    } catch (Exception $e) {
        echo "Errore: " . $e->getMessage();
    }
}

var_dump($pagamenti);
/* $pagamenti = [
    new CartaDiCredito("1234567890122375", "12 / 24"),
    new CartaDiCredito("38746278438746324", "03 / 22"),
    new PayPal("32764"),
    new PayPal("98834"),
];
 */