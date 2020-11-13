<?php

// associative array

$ary = [
  1 => 'One',
  2 => 'Two',
  3 => 'Three'
];

function arySplit($val,$key){
  echo "Key is $key and value is $val <br>";
}
// Split array key and value 
// export val and key 
array_walk($ary,"arySplit");