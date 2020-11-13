<?php


/* Lambda  */

function calculateMath($num1, $num2, $calculate) {
  $total = $num1 + $num2;
  $calculate($total);
}

calculateMath(20, 30, function ($total) {
  echo $total;
}
);

