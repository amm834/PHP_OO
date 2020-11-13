<?php

// Create Common Interface

interface Shape
{
  function getArea();
}



class Circle implements Shape {
  private $radius;
  function __construct($radius) {
    $this->radius = $radius;
  }
  function getArea() {
    return pow($this->radius, 2);
  }
}

class Square implements Shape {
  private $width,
  $height;
  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  function getArea() {
    return $this->width * $this->height * pi();
  }
}

class Index {
  function  __construct() {
    $circle = new Circle(20);
    $square = new Square(20, 40);
    $this->getPrice($circle);
    $this->getPrice($square);
  }
  function getPrice(Shape $shape) {
    $area = $shape->getArea();
    echo 'Price is '.($area * 50).'$'.'<br>';
  }
}
new Index();