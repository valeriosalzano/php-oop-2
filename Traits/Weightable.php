<?php

  trait Weightable
  {
    protected $weight;

    public function setWeight(float $_weight){
      $this->weight = $_weight;
    }

    public function getWeight(){
      return $this->weight;
    }
  }
