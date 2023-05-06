<?php

require_once __DIR__."/Product.php";

class ProductToy extends Product {
  public $type;
  public $icon = 'fa-solid fa-futbol';

  public function __construct($_title,$_categories,$_price,$_img_path,$_type)
  {
    parent::__construct($_title,$_categories,$_price,$_img_path);
    $this->type = $_type;
  }
  
}