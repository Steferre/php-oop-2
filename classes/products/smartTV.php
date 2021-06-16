<?php
require_once(__DIR__ . "/../product.php");
class SmartTV extends Product {
    protected $model;
    protected $brand;
    protected $band = '4G';

    function __construct($name, $quantity, $price, $model, $brand) {
        parent::__contruct($name, $quantity, $price);

        $this->setModel($model);
        $this->setBrand($brand);
    }

    // set
    public function setModel($value) {
        $this->model = $value;
    }
    public function setBrand($value) {
        $this->brand = $value;
    }

    // get
    public function getModel() {
        return $this->model;
    }
    public function getBrand() {
        return $this->brand;
    }

    

}