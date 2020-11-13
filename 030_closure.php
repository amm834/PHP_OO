<?php

$num = 20;
function calculate($var){
  $var();
}

calculate(
  function () use($num){
  echo $num;
}
);
