<?php

require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/CartaDiCredito.php";
require_once __DIR__ . "/data/usersList.php";
require_once __DIR__ . "/data/productList.php";
require_once __DIR__ . "/data/paymentList.php";


/******************************************************/
$user1 = new UserPremium($utenti[0]["name"], $utenti[0]["lastname"]);
$user1->setMail($utenti[0]["mail"]);
$user1->setAddress($utenti[0]["address"]);
$user1->setCart(
    [
        $prodotto1 = $prodotti[0],
        $prodotto2 = $prodotti[2],
    ]
);
$user1->setPagamento(
    $metodo1 = $pagamenti[0]
);
$user1->setAccountType($utenti[0]["accountType"]);

var_dump($user1);

/******************************************************/
$user2 = new UserPremium($utenti[1]["name"], $utenti[1]["lastname"]);
$user2->setMail($utenti[1]["mail"]);
$user2->setAddress($utenti[1]["address"]);
$user2->setCart(
    [
        $prodotto1 = $prodotti[1],
        $prodotto2 = $prodotti[3],
        $prodotto3 = $prodotti[6]
    ]
);
$user2->setPagamento(
    $metodo1 = $pagamenti[2]
);
$user2->setAccountType($utenti[1]["accountType"]);

var_dump($user2);

/******************************************************/
$user3 = new UserPremium($utenti[2]["name"], $utenti[2]["lastname"]);
$user3->setMail($utenti[2]["mail"]);
$user3->setAddress($utenti[2]["address"]);
$user3->setCart(
    [
        $prodotto1 = $prodotti[1],
        $prodotto2 = $prodotti[3],
        $prodotto3 = $prodotti[4],
        $prodotto4 = $prodotti[5],
        $prodotto5 = $prodotti[7],
    ]
);
$user3->setPagamento(
    $metodo1 = $pagamenti[1]
);
$user3->setAccountType($utenti[2]["accountType"]);

var_dump($user3);


/******************************************************/
$user4 = new UserPremium($utenti[3]["name"], $utenti[3]["lastname"]);
$user4->setMail($utenti[3]["mail"]);
$user4->setAddress($utenti[3]["address"]);
$user4->setCart(
    [
        $prodotto1 = $prodotti[7],

    ]
);
$user4->setPagamento(
    $metodo1 = $pagamenti[3]
);
$user4->setAccountType($utenti[3]["accountType"]);

var_dump($user4);
