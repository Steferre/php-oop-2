<?php

class User {
  protected $userName;
  protected $email;
  
  
  function __construct($userName, $email) {
      $this->userName = $userName;
      $this->email = $email;
  }
  
}