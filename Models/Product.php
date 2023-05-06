<?php

require_once __DIR__."/Category.php";

class Product {
  public $title;
  public $categories;
  private $price;
  public $img_path;

  public function __construct(string $_title, array $_categories, float $_price, string $_img_path = '')
  {
    $this->title = $_title;

    foreach ($_categories as $category) {
      if(!$category instanceof Category){
        echo 'categories must be instances of Category!';
        die();
      }
    }
    $this->categories = $_categories;

    $this->price = $_price;
    $this->img_path = $_img_path;
  }

  public function getPrice(){
    return $this->price;
  }
}