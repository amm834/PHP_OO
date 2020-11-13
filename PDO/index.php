<?php

require_once 'vendor/autoload.php';
use app\Database\DAL;
class Index
{

  public function __construct() {
    $db = new DAL();
    $ary = [
      ["one","two","three"],
      ["1","2","3"],
      ];
      foreach ($ary as $a){
        print_r($a[0]);
      }
  }
}
new Index;