<?php
/* require_once __DIR__ . "/classes/User.php"; */
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/CartaDiCredito.php";
require_once __DIR__ . "/data/usersList.php";
/* require_once __DIR__ . "/data/productData.php"; */
require_once __DIR__ . "/data/productList.php";
require_once __DIR__ . "/data/paymentList.php";
/* require_once __DIR__ . "/classes/ProductTech.php";
require_once __DIR__ . "/classes/ProductClothes.php"; */

/******************************************************/
$user1 = new UserPremium($utenti[0]["name"], $utenti[0]["lastname"]);
$user1->setMail($utenti[0]["mail"]);
$user1->setAddress($utenti[0]["address"]);
/* $user1->cart = [

    $prodotto1 = new ProductTech($products[0]["name"]),
    $prodotto1->setProductPrice($products[0]["prezzo"]),
    $prodotto1->setProductTypology($products[0]["tipologia"]),
    $prodotto1->setBrand($products[0]["marca"]),
    $prodotto1->setType($products[0]["tipo"]),
    $prodotto1->setWarranty($products[0]["garanzia"]),


    $prodotto2 = new ProductClothes($products[3]["name"]),
    $prodotto2->setProductPrice($products[3]["prezzo"]),
    $prodotto2->setProductTypology($products[3]["tipologia"]),
    $prodotto2->setBrand($products[3]["marca"]),
    $prodotto2->setType($products[3]["tipo"]),
    $prodotto2->setSize($products[3]["taglia"]),



    $prodotto3 = new ProductTech($products[1]["name"]),
    $prodotto3->setProductPrice($products[1]["prezzo"]),
    $prodotto3->setProductPrice($products[1]["prezzo"]),
    $prodotto3->setProductTypology($products[1]["tipologia"]),
    $prodotto3->setBrand($products[1]["marca"]),
    $prodotto3->setType($products[1]["tipo"]),
    $prodotto3->setWarranty($products[1]["garanzia"]),

]; */

$user1->setCart(
    [
        $prodotto1 = $prodotti[0],
        $prodotto2 = $prodotti[2],
    ]
    /*  $prodotto1 = new ProductTech($products[0]["name"]),
    $prodotto1->setProductPrice($products[0]["prezzo"]),
    $prodotto1->setProductTypology($products[0]["tipologia"]),
    $prodotto1->setBrand($products[0]["marca"]),
    $prodotto1->setType($products[0]["tipo"]),
    $prodotto1->setWarranty($products[0]["garanzia"]),



    $prodotto2 = new ProductClothes($products[3]["name"]),
    $prodotto2->setProductPrice($products[3]["prezzo"]),
    $prodotto2->setProductTypology($products[3]["tipologia"]),
    $prodotto2->setBrand($products[3]["marca"]),
    $prodotto2->setType($products[3]["tipo"]),
    $prodotto2->setSize($products[3]["taglia"]),



    $prodotto3 = new ProductTech($products[1]["name"]),
    $prodotto3->setProductPrice($products[1]["prezzo"]),
    $prodotto3->setProductPrice($products[1]["prezzo"]),
    $prodotto3->setProductTypology($products[1]["tipologia"]),
    $prodotto3->setBrand($products[1]["marca"]),
    $prodotto3->setType($products[1]["tipo"]),
    $prodotto3->setWarranty($products[1]["garanzia"]), */
    /*     $user1Cart = [
        [
            $prodotto1 = new ProductTech($products[0]["name"]),
            $prodotto1->setProductPrice($products[0]["prezzo"]),
            $prodotto1->setProductTypology($products[0]["tipologia"]),
            $prodotto1->setBrand($products[0]["marca"]),
            $prodotto1->setType($products[0]["tipo"]),
             var_dump($prodotto1)
        ],

        [
            $prodotto2 = new ProductClothes($products[3]["name"]),
            $prodotto2->setProductPrice($products[3]["prezzo"]),
        ],

        [
            $prodotto3 = new ProductTech($products[1]["name"]),
            $prodotto3->setProductPrice($products[1]["prezzo"]),
        ],
    ] */
);

$user1->setPagamento(
    $metodo1 = $pagamenti[0]
);

/* echo "<pre>";
print_r($user1Cart);
echo "</pre>"; */

$user1->setAccountType($utenti[0]["accountType"]);

/* var_dump($user1);
echo "<strong>Utente: </strong>" . $user1->getUserCompleteName() . "<br>";
echo "<strong>E-mail: </strong>" . $user1->getMail() . "<br>";
echo "<strong>Indirizzo: </strong>" . $user1->getAddress() . "<br>";
echo "<strong>Carrello: </strong>" . $prodotto->getProductTech() . "<br>";
echo "<strong>Tipo di account: </strong>" . $user1->getAccountType() . "<br>";
echo "<strong>Sconto: </strong>" . $user1->getDiscount() . "<br><br>"; */
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
/* $user2->cart = [

     $prodotto1 = new ProductTech($products[2]["name"]),
    $prodotto1->setProductPrice($products[2]["prezzo"]),
    $prodotto1->setProductTypology($products[2]["tipologia"]),
    $prodotto1->setBrand($products[2]["marca"]),
    $prodotto1->setType($products[2]["tipo"]),
    $prodotto1->setWarranty($products[2]["garanzia"]),


    $prodotto2 = new ProductClothes($products[4]["name"]),
    $prodotto2->setProductPrice($products[4]["prezzo"]),
    $prodotto2->setProductTypology($products[4]["tipologia"]),
    $prodotto2->setBrand($products[4]["marca"]),
    $prodotto2->setType($products[4]["tipo"]),
    $prodotto2->setSize($products[4]["taglia"]), 

]; */

$user2->setPagamento(
    $metodo1 = $pagamenti[2]
);
$user2->setAccountType($utenti[1]["accountType"]);

/*     var_dump($utente); */
/* echo "<strong>Utente: </strong>" . $user2->getUserCompleteName() . "<br>";
echo "<strong>E-mail: </strong>" . $user2->getMail() . "<br>";
echo "<strong>Indirizzo: </strong>" . $user2->getAddress() . "<br>";
echo "<strong>Carrello: </strong>" . $user2->getCart() . "<br>"; 
echo "<strong>Tipo di account: </strong>" . $user2->getAccountType() . "<br>";
echo "<strong>Sconto: </strong>" . $user2->getDiscount() . "<br><br>";
 */
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
/* $user3->cart = [

    $prodotto1 = new ProductClothes($products[3]["name"]),
    $prodotto1->setProductPrice($products[3]["prezzo"]),
    $prodotto1->setProductTypology($products[3]["tipologia"]),
    $prodotto1->setBrand($products[3]["marca"]),
    $prodotto1->setType($products[3]["tipo"]),
    $prodotto1->setSize($products[3]["taglia"]),


    $prodotto2 = new ProductClothes($products[4]["name"]),
    $prodotto2->setProductPrice($products[4]["prezzo"]),
    $prodotto2->setProductTypology($products[4]["tipologia"]),
    $prodotto2->setBrand($products[4]["marca"]),
    $prodotto2->setType($products[4]["tipo"]),
    $prodotto2->setSize($products[4]["taglia"]),

]; */

$user3->setPagamento(
    $metodo1 = $pagamenti[1]
);
$user3->setAccountType($utenti[2]["accountType"]);

/*     var_dump($utente); */
/* echo "<strong>Utente: </strong>" . $user3->getUserCompleteName() . "<br>";
echo "<strong>E-mail: </strong>" . $user3->getMail() . "<br>";
echo "<strong>Indirizzo: </strong>" . $user3->getAddress() . "<br>";
echo "<strong>Carrello: </strong>" . $user3->getCart() . "<br>";
echo "<strong>Tipo di account: </strong>" . $user3->getAccountType() . "<br>";
echo "<strong>Sconto: </strong>" . $user3->getDiscount() . "<br><br>"; */
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
/* $user4->cart = [

    $prodotto1 = new ProductClothes($products[5]["name"]),
    $prodotto1->setProductPrice($products[5]["prezzo"]),
    $prodotto1->setProductTypology($products[5]["tipologia"]),
    $prodotto1->setBrand($products[5]["marca"]),
    $prodotto1->setType($products[5]["tipo"]),
    $prodotto1->setSize($products[5]["taglia"]),


    $prodotto2 = new ProductClothes($products[4]["name"]),
    $prodotto2->setProductPrice($products[4]["prezzo"]),
    $prodotto2->setProductTypology($products[4]["tipologia"]),
    $prodotto2->setBrand($products[4]["marca"]),
    $prodotto2->setType($products[4]["tipo"]),
    $prodotto2->setSize($products[4]["taglia"]),

]; */

$user4->setPagamento(
    $metodo1 = $pagamenti[3]
);
$user4->setAccountType($utenti[3]["accountType"]);

/*     var_dump($utente); */
/* echo "<strong>Utente: </strong>" . $user4->getUserCompleteName() . "<br>";
echo "<strong>E-mail: </strong>" . $user4->getMail() . "<br>";
echo "<strong>Indirizzo: </strong>" . $user4->getAddress() . "<br>";
echo "<strong>Carrello: </strong>" . $user4->getCart() . "<br>";
echo "<strong>Tipo di account: </strong>" . $user4->getAccountType() . "<br>";
echo "<strong>Sconto: </strong>" . $user4->getDiscount() . "<br><br>"; */
var_dump($user4);


/* foreach ($products as $product) {
    $prodotto = new Product($product["name"]);
    $prodotto->setProductTypology($product["tipologia"]);
    $prodotto->setProductTypology($product["tipologia"]);


    echo "<strong>Prodotto: </strong>" . $prodotto->getProductName() . "<br>";
    echo "<strong>Tipologia: </strong>" . $prodotto->getProductTypology() . "<br>";
}
 */
/* $up = new UserPremium($utenti[3]["name"], $utenti[3]["lastname"]);
$up->setAccountType("premium");
echo $up->getDiscount();
 */