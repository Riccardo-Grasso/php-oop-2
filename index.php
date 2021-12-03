<?php
/* require_once __DIR__ . "/classes/User.php"; */
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/data/usersList.php";
require_once __DIR__ . "/data/productData.php";
require_once __DIR__ . "/classes/ProductTech.php";
require_once __DIR__ . "/classes/ProductClothes.php";


foreach ($utenti as $utente) {
    $user = new UserPremium($utente["name"], $utente["lastname"]);
    $user->setMail($utente["mail"]);
    $user->setAddress($utente["address"]);
    /* $user->setCart($utente["cart"]); */
    $user->setAccountType($utente["accountType"]);

    /*     var_dump($utente); */
    echo "<strong>Utente: </strong>" . $user->getUserCompleteName() . "<br>";
    echo "<strong>E-mail: </strong>" . $user->getMail() . "<br>";
    echo "<strong>Indirizzo: </strong>" . $user->getAddress() . "<br>";
    /*     echo "<strong>Carrello: </strong>" . $user->getCart() . "<br>"; */
    echo "<strong>Tipo di account: </strong>" . $user->getAccountType() . "<br>";
    echo "<strong>Sconto: </strong>" . $user->getDiscount() . "<br><br>";
}

/* $up = new UserPremium($utenti[3]["name"], $utenti[3]["lastname"]);
$up->setAccountType("premium");
echo $up->getDiscount();
 */