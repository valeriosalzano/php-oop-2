<?php

require_once "Product.php";

class ProductFood extends Product {
  public $weight;

  public function __construct($_title,$_categories,$_price,$_img_path,$_weight)
  {
    parent::__construct($_title,$_categories,$_price,$_img_path);
    $this->weight = $_weight;
  }
}