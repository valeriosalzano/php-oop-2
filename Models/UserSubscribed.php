<?php 

require_once "User.php";

class UserSubscribed extends User {
   private $mail;

   public function __construct($_mail)
   {
    $this->mail = $_mail;
    $this->setDiscount(20);
   }

   public function getMail(){
      return $this->mail;
   }
}