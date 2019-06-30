<?php

class Person{
  public $name;
  public $age;

          public function __construct($name, $age){
              $this->name = $name;
              $this->age = $age;
      }

          public function introduce(){
          return 'My name is '. $this->name . '. My age is ' .  $this->age;
      }

}

final class Tom extends Person{
      public $school;
      public function __construct($name, $age, $school){
      parent::__construct($name, $age);
      $this->school = $school;
  }

final public function introduce(){
      return 'My name is '. $this->name . '. My age is ' .  $this->age . ' and my school is ' .$this->school. '.';
  }

final public function sayHello(){
      return "Hello World!";
}



}

$person = new Tom("Tom", 29, "High School");

echo  $person->introduce();
echo '<br>';
echo  $person->sayHello();












 ?>
