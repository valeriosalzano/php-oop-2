<?php

class Category {
  public $specie;
  public $icon;

  public function __construct(string $_specie, string $_icon)
  {
    $this->specie = $_specie;
    $this->icon = $_icon;
  }
}