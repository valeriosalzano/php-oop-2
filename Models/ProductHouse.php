<?php

require_once __DIR__."/Product.php";

class ProductHouse extends Product {
  public $size;

  public function __construct($_title,$_categories,$_price,$_img_path,$_size)
  {
    parent::__construct($_title,$_categories,$_price,$_img_path);
    $this->size = $_size;
  }
}