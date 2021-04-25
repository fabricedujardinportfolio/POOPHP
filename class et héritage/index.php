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
class Dog {
  // Properties
  public $name;
  public $color;
  public $tail;
  public $breeds;

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
class cat {
    // Properties
    public $name;
    public $color;
    public $tail;
    public $breeds;
  
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
  $cat1 = new cat();
  $cat1->set_name('bobyCat');
  $cat1->set_color('blue');
  $cat1->set_tail('2m');
  $cat1->set_breeds('persan');
  echo "CAT";
  echo "<br>";
  echo "Name: " . $cat1->get_name();
  echo "<br>";
  echo "Color: " .  $cat1->get_color();
  echo "<br>";
  echo "tail: " . $cat1->get_tail();
  echo "<br>";
  echo "breeds: " .  $cat1->get_breeds();
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "DOG";
  echo "<br>";
$dog1 = new Dog();
$dog1->set_name('boby');
$dog1->set_color('blue');
$dog1->set_tail('2m');
$dog1->set_breeds('labrador');
echo "Name: " . $dog1->get_name();
echo "<br>";
echo "Color: " .  $dog1->get_color();
echo "<br>";
echo "tail: " . $dog1->get_tail();
echo "<br>";
echo "breeds: " .  $dog1->get_breeds();
?>
</body>
</html>