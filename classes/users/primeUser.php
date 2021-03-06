<?php
require_once(__DIR__ . "/../user.php");

class PrimeUser extends User {
  protected $shippingCost = 0;
  protected $signInDate;
  
  function __construct($name, $email, $signInDate = NULL) {
    parent::__construct($name, $email);
    
    if(!isset($signInDate)) {
        $signInDate = date("Y-m-d H:i:s");
    }

    $this->signInDate = $signInDate;
  }

}
  
