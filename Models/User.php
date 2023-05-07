<?php
class User {
  private $discount = 0;

  public function getDiscount(){
    return $this->discount;
  }

  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
}