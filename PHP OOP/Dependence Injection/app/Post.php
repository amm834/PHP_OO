<?php

namespace app;
use app\Author;

class Post{
  private $author,$content;
  /**
   * @var1 access object from Author Object
   * @var2 string
   * */
  function __construct(Author $author,string $content){
    $this->author = $author;
    $this->content = $content;
  }
  
  // Return Author Object
  function getAuthor(){
    return $this->author;
  }
  
  // Return Content
  function getContent(){
    return $this->content;
  }
  
}