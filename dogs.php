<?php
Class Animals{
  private $legs = 4;
  function Getlegs() {
   echo '<br>'.$this->legs;
   }
   function Setlegs($legs) {
       $this->legs = strip_tags($legs);
   }

}




  function __construct($name1, $owner1, $age1) {
        $this->Setname($name1);
        $this->Setowner($owner1);
        $this->Setage($age1);
    }

  function greet() {
  echo "<h3>Haw haw haw!!!!</h3>";
  }

   function info() {
    echo "<h2>Info</h2>";
    echo "<b> Name: </b>".$this->name."<br>";
    echo "<b> Age: </b>".$this->age."<br>";
    echo "<b> Owner: </b>".$this->owner."<br>";
  }
  function Getname() {
   echo '<br>'.$this->name;
   }
   function Setname($name) {
       $this->name = strip_tags($name);
   }
   function Getowner() {
    echo 'mr. '.$this->owner;
    }
    function Setowner($owner) {
    $this->owner = $owner;
    }
    function Getage() {
     echo $this->age;
     }
     function Setage($age) {
     $this->age = $age;
     }
}
$dog1 = new Dogs('Maggie', 'Bill', 21);
$dog2 = new Dogs('Вилли', 'Кирилл', 32);

// $dog1->info();
$dog2->info();
// $dog1->name = 'Marrie';
$dog1->Setname('Marrie');
$dog1->info();

var_dump($dog1);
