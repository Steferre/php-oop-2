<?php

class InvalidName extends Exception {
  protected $defaultMessage = "Stringa non valida";

  function __construct($message = "", $code = 0) {
    if (empty($message)) {
      $message = $this->defaultMessage;
    }

    parent::__construct($message, $code);
  }
}