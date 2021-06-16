<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
*/

require_once("./classes/user.php");
require_once("./classes/users/primeUser.php");
require_once("./classes/cart.php");
require_once("./classes/payment.php");
require_once("./classes/payments/creditCard.php");
require_once("./classes/product.php");
require_once("./classes/products/smartTV.php");


//$user = new User("pincoPal", "pinco@gmail.com");

$userPrime = new PrimeUser("pincoPal", "pinco@gmail.com");

$tv = new SmartTV("Samsung Serie 7", 1, 379.99, "UE43TU7090U", "Samsung");
$tv2 = new SmartTV("LG UHD TV", 1, 449.90, "43UP78006LB", "LG");


//$userPrime->setDiscount(379.99);

$carrello = new Cart($userPrime, false);
$carrello->addProduct($tv);
$carrello->addProduct($tv2);
//$carrello->addProduct($tv);
//$carrello->addProduct($tv);
$carrello->findTotalPrice();


//var_dump($userPrime);
//var_dump($tv);
var_dump($carrello);