<?php

//require_once(__DIR__ . "/users/primeUser.php");
//require_once(__DIR__ . "/products/smartTV.php");

class Cart {
    private $user;
    private $products = [];
    private $payment;
    private $totalPrice = 0;

    function __construct($user) {
        $this->user = $user;
    }

    function addProduct($product) {
        $this->products[] = $product;
    }

    function findTotalPrice() {

        foreach($this->products as $product) {
            $this->totalPrice += $product->price;
        }

        $this->totalPrice;
    }

}