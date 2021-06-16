<?php
class User {
  protected $userName;
  protected $email;
  protected $userPaymentMethod = [];
  
  
  function __construct($userName, $email) {
      $this->userName = $userName;
      $this->email = $email;
  }

  function addCC($creditCard) {
    $this->userPaymentMethod[] = $creditCard;
  }
}