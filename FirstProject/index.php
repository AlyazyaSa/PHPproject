<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

#variable:

//  $x=5;     
//  $y="yaze";
//  $z=23;
//  echo $x, $y, $z;


// $text="I like Red color";
// echo "What color do you like ? " .  $text . "!";


//operatoin:
// $x = 10;
// $y = 10;
// echo $x + $y ;


//------------------------------------------------------

#PHP Data Types::

//number:
// $O="10000";
// var_dump($O);
 
//name:
// $S="zakaryia";
// var_dump($S);

//PHP Array:
// $cars = array("toyota", "volvo", "BMW");
// var_dump($cars);

//-------------------------------------------------------

#PHP Object

class Car {
  public $color;
  public $model;

  public function __construct($color, $model)
   {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
  
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);


?>


</body>
</html>