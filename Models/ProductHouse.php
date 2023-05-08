<?php

require_once __DIR__."/Product.php";

class ProductHouse extends Product {
  public $measures;
  public $icon = 'fa-solid fa-house';

  public function __construct(string $_title, array $_categories, float $_price, float $_weight, string $_size, string $_measures)
  {
    parent::__construct($_title,$_categories,$_price,$_weight);
    $this->setSize($_size);
    $this->measures = $_measures;
  }
}