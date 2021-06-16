<?php

class Payment {
    protected $name;
    protected $date;

    // fare metodi set e get per assegnare le variabili
    function __construct($buyerName, $paymentDate) {
        $this->name = $buyerName;
        $this->date = $paymentDate;
    }
}