<?php
   class Person {
   
      
      private $name;
      private $age;

     
      function __construct(string $param1="abc", int $param2=18) {
         $this->name = $param1;
         $this->age = $param2;
      }

      function getName() {
         echo "Name: $this->name" . PHP_EOL;;
      }
      function getAge() {
         echo "Age: $this->age" . PHP_EOL;;
      }
   }
   $b1 = new Person();
   $b1->getName();
   $b1->getAge();
   echo "Name : $b1->name Age: $b1->age" . PHP_EOL;
?>