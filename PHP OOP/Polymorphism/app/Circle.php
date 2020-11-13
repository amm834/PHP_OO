<?php

namespace app;
use app\Inter\Shape;

class Circle implements Shape
{
  private $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  function getArea(){
    return $this->radius * $this->radius * pi();
  }
}