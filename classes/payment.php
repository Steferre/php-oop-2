<?php

class Payment {
    protected $name;
    protected $date;
    protected $userName;
    // fare metodi set e get per assegnare le variabili
    function __construct($name, $date, $userName) {
        $this->name = $name;
        $this->name = $date;
        $this->name = $userName;
    }
}