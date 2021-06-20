<?php

class Product {
   protected $name;
   protected $quantity;
   public $price;
   
   function __contruct($name, $quantity, $price){
        $this->setName($name);
        $this->setQuantity($quantity);
        $this->setPrice($price);
   }

   // set
   public function setName($value) {
       if(is_numeric($value)) {
          throw new Exception("Il nome inserito non e' valido!");
       }
    
       $this->name = $value;
    }
    public function setQuantity($value) {
        if(!is_numeric($value)) {
            throw new Exception("Il dato inserito non e' valido!");
        }
        $this->quantity = $value;
    }

    public function setPrice($value) {
        if(!is_numeric($value)) {
            throw new Exception("Il dato inserito non e' valido!");
        }
        $this->price = $value;
    }

    // get
   public function getName() {
       return $this->name;
   }
   public function getQuantity() {
    return $this->quantity;
   }
   public function getPrice() {
    return $this->price;
   }

}