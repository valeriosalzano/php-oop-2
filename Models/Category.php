<?php

include_once __DIR__."/../Traits/Sizeable.php";

class Category {

  use Sizeable;

  public $name;
  public $icon;

  public function __construct(string $_name, string $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
}