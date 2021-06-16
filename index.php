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


//$user = new User("steFerre", "pinco@gmail.com");

$userPrime = new PrimeUser("steFerre", "pinco@gmail.com");

$tv = new SmartTV("Samsung Serie 7", 1, 379.99, "UE43TU7090U", "Samsung");

$carrello = new Cart($userPrime);
$carrello->addProduct($tv);
var_dump($userPrime);
var_dump($tv);
var_dump($carrello);