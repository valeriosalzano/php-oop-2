<?php

require_once __DIR__."/Product.php";

class ProductToy extends Product {
  public $type;
  public $icon = 'fa-solid fa-futbol';

  public function __construct(string $_title, array $_categories, float $_price, float $_weight, string $_type)
  {
    parent::__construct($_title,$_categories,$_price,$_weight);
    $this->type = $_type;
  }
  
}