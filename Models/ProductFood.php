<?php

require_once __DIR__."/Product.php";

class ProductFood extends Product {
  
  public $icon = 'fa-solid fa-bone';

  public function __construct(string $_title, array $_categories, float $_price, float $_weight, string $_size)
  {
    parent::__construct($_title,$_categories,$_price,$_weight);
    $this->setSize($_size);
  }
}