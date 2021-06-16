<?php

class CreditCard extends Payment {
    protected $number;
    protected $expireDate;
    protected $cvv;

    function __construct($number, $expireDate, $cvv) {
        $this->setExpireDate($expireDate);
    }

    public function setExpireDate($value) {
        $date = date_create_from_format("m/Y", $value);

        $this->expireDate = $date;
    }
    
    public function getExpireDate() {
        return date_format($this->expireDate, "m/y");
    }
}