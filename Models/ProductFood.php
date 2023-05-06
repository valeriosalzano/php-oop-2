<?php

require_once __DIR__."/Product.php";

class ProductFood extends Product {
  
  public $weight;
  public $icon = 'fa-solid fa-bone';

  public function __construct($_title,$_categories,$_price,$_img_path,float $_weight)
  {
    parent::__construct($_title,$_categories,$_price,$_img_path);
    $this->weight = $_weight;
  }
}