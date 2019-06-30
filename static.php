<?php

class User{
  public $firstName;
  public $lastName;

  public function __construct($firstName, $lastName){

    $this->firstName = self::filterName($firstName);
    $this->lastName = self::filterName($lastName);
 }
    static function filterName($name){

    // remove whitespace
      $name = trim($name);

      $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

      return $name;

    }


}

$user = new User('Michael%%%%%' , '    _______Jackson!!!!!!!!');

echo $user->firstName . ' ' . $user->lastName;

 ?>
