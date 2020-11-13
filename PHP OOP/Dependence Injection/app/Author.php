<?php

namespace app;

class Author{
  private $fname,$lname;
  function __construct($fname,$lname){
    $this->fname = $fname;
    $this->lname = $lname;
  }
  
  // Return First Name
  
  function getFname(){
    return $this->fname;
  }
  
  //Return Last Name
  
  function getLName(){
    return $this->lname;
  }
}