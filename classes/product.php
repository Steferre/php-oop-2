<?php

class Product {
   protected $name;
   protected $quantity;
   protected $price;
   
   function __contruct($name, $quantity, $price){
        $this->setName($name);
        $this->setQuantity($quantity);
        $this->setPrice($price);
   }

   // set
   public function setName($value) {
       $this->name = $value;
   }
    public function setQuantity($value) {
        $this->quantity = $value;
    }
    public function setPrice($value) {
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