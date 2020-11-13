<?php

// Callbaco function

class Language {
  
  function getLanguage($func) {
    $this->$func();
  }
  function english() {
    echo 'Welcome from English Language!';
  }
  function myanmar() {
    echo 'Welcome from Myanmar Language!';
  }
}

$lang = new Language();
$lang->getLanguage('english');
echo '<hr>';
$lang->getLanguage('myanmar');