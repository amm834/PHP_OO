<?php

namespace app;
use app\Inter\Shape;

class Square implements Shape
{
  private $width,
  $height;
  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  function getArea() {
    return $this->width * $this->height;
  }
}