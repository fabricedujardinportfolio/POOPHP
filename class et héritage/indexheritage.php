<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document POO</title>
</head>
<body>
    
<?php


class Animal {    
 // Properties
 public $name;
 public $color;
 public $tail;

 // Methods
 function set_name($name) {
   $this->name = $name;
 }
 function get_name() {
   return $this->name;
 }
 function set_color($color) {
   $this->color = $color;
 }
 function get_color() {
   return $this->color;
 }
 function set_tail($tail) {
   $this->tail = $tail;
 }
 function get_tail() {
   return $this->tail;
 }
 function set_breeds($breeds) {
    $this->breeds = $breeds;
  }
  function get_breeds() {
    return $this->breeds;
  }
}
class Dog extends Animal {
  // Properties
  public $breeds;
  // Methods
    public function set_breeds($breeds) {
      $this->breeds = $breeds;
    }
    public function get_breeds() {
      return $this->breeds;
    }
}
class Cat extends Animal{
    // Properties
    public $breeds;

  // Methods
    public function set_breeds($breeds) {
      $this->breeds = $breeds;
    }
    public function get_breeds() {
      return $this->breeds;
    }
}

$cat1 = new Cat();
$cat2 = new Cat();
$dog1 = new Dog();
$dog2 = new Dog();

//DOG
$dog1->set_name('boby');
$dog1->set_color('blue');
$dog1->set_tail('2m');
$dog1->set_breeds('labrador');


$dog2->set_name('bobyDog');
$dog2->set_color('black');
$dog2->set_tail('3m');
$dog2->set_breeds('Caniche');

echo "<br>";
echo "DOG";
echo "<br>";
echo "Name: " . $dog1->get_name();
echo "<br>";
echo "Color: " .  $dog1->get_color();
echo "<br>";
echo "height: " . $dog1->get_tail();
echo "<br>";
echo "breeds: " .  $dog1->get_breeds();

echo "<br>";
echo "<br>";
echo "DOG";
echo "<br>";
echo "Name: " . $dog2->get_name();
echo "<br>";
echo "Color: " .  $dog2->get_color();
echo "<br>";
echo "height: " . $dog2->get_tail();
echo "<br>";
echo "breeds: " .  $dog2->get_breeds();


//CAT
$cat1->set_name('bobyCat');
$cat1->set_color('blue');
$cat1->set_tail('2m');
$cat1->set_breeds('persan');

$cat2->set_name('bobyCatata');
$cat2->set_color('green');
$cat2->set_tail('1m');
$cat2->set_breeds('Siamois');

echo "<br>";
echo "<br>";
echo "CAT";
echo "<br>";
echo "Name: " . $cat1->get_name();
echo "<br>";
echo "Color: " .  $cat1->get_color();
echo "<br>";
echo "height: " . $cat1->get_tail();
echo "<br>";
echo "breeds: " .  $cat1->get_breeds();

echo "<br>";
echo "<br>";
echo "CAT";
echo "<br>";
echo "Name: " . $cat2->get_name();
echo "<br>";
echo "Color: " .  $cat2->get_color();
echo "<br>";
echo "height: " . $cat2->get_tail();
echo "<br>";
echo "breeds: " .  $cat2->get_breeds();
?>
</body>
</html>