<?php
require_once(__DIR__ . "/../payment.php");
class CreditCard extends Payment {
    protected $number;
    protected $expireDate;
    protected $cvv;

    function __construct($name, $date, $number, $expireDate, $cvv) {
        parent::__construct($name, $date);

        $this->setNumber($number);
        $this->setExpireDate($expireDate);
        $this->setCvv($cvv);
    }

    // set
    public function setNumber($value) {

        $this->number = $value;
    }

    public function setExpireDate($value) {
        $this->expireDate = $value;
    }

    public function setCvv($value) {
    
        $this->cvv = $value;
    }
    
    // get
    public function getNumber() {
        return $this->number;
    }

    public function getExpireDate() {
        return $this->date;
    }

    public function getCvv() {
        return $this->cvv;
    }
}