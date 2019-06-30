<?php
  abstract class Person{
    public $name;

    public function __construct($name){
      $this->name = $name;
    }

    abstract public function greet() : string;
  }

  class Programmer extends Person{
    public function greet() : string{
      return 'Hello World from ' . $this->name . '.';
    }
  }

  class Student extends Person{
    public function greet() : string{
      return 'Greetings from student ' . $this->name . '.';
    }
  }

  class Teacher extends Person{
    public function greet() : string{
      return 'Hello my students. I\'m proffesor ' . $this->name . '.';
    }
  }

  $programmer = new Programmer('Matt');
  echo $programmer->greet();
  echo '<br>';

  $student = new Student('John');
  echo $student->greet();
  echo '<br>';

  $teacher = new Teacher('Pienkowski');
  echo $teacher->greet();



?>
