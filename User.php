<?php
  class User{
    public $firstName;
    public $lastName;
    public function hello(){
      return "<br>Hello $this->firstName";
    }
    public function register(){
      $message = "<br>$this->firstName registered";
      return $this;
    }
    public function mail(){
      $message = "<br>$this->firstName mailed";
      return $this;
    }
  }

  $user1 = new User();
  $user1->firstName = "Jane";
  $user1->lastName = "Roe";

  echo $user1->register()->mail()->hello();
