<?php

$num = 0;
// associative array

$ary = [
  1 => 'One',
  2 => 'Two',
  3 => 'Three'
];

// Split array key and value
// export val and key
array_walk($ary, function ($val, $key) use (&$num) {
  $num = ++$num;
  echo "Key is $key and value is $val and current id is $num <br>";

});