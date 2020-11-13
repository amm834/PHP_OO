<?php
require_once 'vendor/autoload.php';
use app\Inter\Shape;
use app\Circle;
use app\Square;

/* Polymorphism 

class index
{

  public function __construct() {
    $circle = new Circle(20);
    echo $this->getPrice($circle);
    echo '<br>';
    $square = new Square(50, 50);
        echo $this->getPrice($square);

  }
  // Down Casting
  function getPrice(Shape $shape) {
    $area = $shape->getArea();

    return "Area is {$area} and price is ".($area * 50)." $.";
  }
}
new index();