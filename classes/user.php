<?php
require_once(__DIR__ . "/errors/invalidMail.php");
class User {
  protected $userName;
  protected $email;
  protected $userPaymentMethod = [];
  
  
  function __construct($userName, $email) {
      $this->userName = $userName;
      $this->setEmail($email);
  }

  function addCC($creditCard) {
    $this->userPaymentMethod[] = $creditCard;
  }

  public function setEmail($value) {
    if(!strstr($value, "@")){
      throw new InvalidMail();
    }

    $this->email = $value;
  }

  public function getEmail() {
    return $this->email;
  }
}