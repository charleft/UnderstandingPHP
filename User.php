<?php
  class User{
    public $firstName;
    public $lastName;
    public function hello(){
      return "<br>Hello $this->firstName";
    }
  }

  $user1 = new User();
  $user1->firstName = "Jonny";
  $user1->lastName = "Roe";

  echo $user1->hello();
