<?php
require_once 'vendor/autoload.php';
use app\Post;
use app\Author;
class Index
{
  
  public function __construct()
  {
    $fname = "Aung Myat";
    $lname = "Moe";
    $content = "I am content";
    $author = new Author($fname,$lname);
    
    // Inject Author Object To Post Object
    $post = new Post($author,$content);
    $postAuthor = $post->getAuthor();
    echo $postAuthor->getFname() .' ';
    echo $postAuthor->getLname(). '<br>';
    echo $post->getContent();
  }
}

new Index();