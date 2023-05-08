<?php

  trait Sizeable
  {
    protected $size;

    public function setSize(string $size){
      $this->size = $size;
    }

    public function getSize(){
      return $this->size;
    }
  }
