<?php

class InvalidMail extends Exception {
  protected $defaultMessage = "La mail inserita non e' valida!";

  function __construct($message = "", $code = 0) {
    if (empty($message)) {
      $message = $this->defaultMessage;
    }

    parent::__construct($message, $code);
  }
}