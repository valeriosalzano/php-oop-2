<?php

require_once "Product.php";

class ProductToy extends Product {
  public $type;

  public function __construct($_title,$_categories,$_price,$_img_path,$_type)
  {
    parent::__construct($_title,$_categories,$_price,$_img_path);
    $this->type = $_type;
  }
  
}