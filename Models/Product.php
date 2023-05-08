<?php

require_once __DIR__."/Category.php";
require_once __DIR__."/../Traits/Weightable.php";
include_once __DIR__."/../Traits/Sizeable.php";

class Product {

  use Weightable;
  use Sizeable;

  public $title;
  public $categories;
  private $price;
  public $img_path;

  public function __construct(string $_title, array $_categories, float $_price, float $_weight)
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
    $this->setWeight($_weight);
  }

  public function getPrice(){
    return $this->price;
  }
}