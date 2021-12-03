<?php
/* require_once __DIR__ . "/classes/User.php"; */
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/data/usersList.php";


foreach ($utenti as $utente) {
    $user = new User($utente["name"], $utente["lastname"]);
    $user->setMail($utente["mail"]);
    $user->setAddress($utente["address"]);
    $user->setAccountType($utente["accountType"]);

    /*     var_dump($utente); */
    echo $user->getUserCompleteName() . "<br>";
    echo $user->getMail() . "<br>";
    echo $user->getAccountType() . "<br>";
    echo $user->getAddress() . "<br><br>";
}
