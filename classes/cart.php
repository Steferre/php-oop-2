<?php

//require_once(__DIR__ . "/users/primeUser.php");
//require_once(__DIR__ . "/products/smartTV.php");

class Cart {
    private $user;
    private $products = [];
    private $payment;
    private $totalPrice = 0;
    protected $isPrimeUser;

    function __construct($user, $isPrimeUser) {
        $this->user = $user;
        $this->isPrimeUser = $isPrimeUser;
    }

    function addProduct($product) {
        $this->products[] = $product;
    }

    function calcDiscount($totalAmount) {
        $toReturn = 0;

        if($this->isPrimeUser) {
            $toReturn = $totalAmount - (($totalAmount * 20) / 100);

            return $toReturn; 
        } else {

            return $toReturn = $totalAmount;
        }

    }

    function findTotalPrice() {

        $spesaTotale = 0;

        foreach($this->products as $product) {
            $spesaTotale += $product->price;
        }
        
        //var_dump($spesaTotale);

        $spesaTotaleScontata = $this->calcDiscount($spesaTotale);

        //var_dump($spesaTotaleScontata);

        $this->totalPrice = $spesaTotaleScontata;
       
    }
}