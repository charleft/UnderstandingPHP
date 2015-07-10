<?php
  class User{
    public $firstName;
    public $lastName;
    public function hello(){
      return "<br>Hello";
    }
  }

  $user1 = new User();
  $user1->firstName = "John";
  $user1->lastName = "Doe";

  echo $user1->hello()." ".$user1->firstName." ".$user1->lastName;

  $user2 = new User();
  $user2->firstName = "Jane";
  $user2->lastName = "Doe";

  echo $user2->hello()." ".$user2->firstName." ".$user2->lastName;