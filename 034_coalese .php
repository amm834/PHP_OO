<?php

/* Coalese => (??) */

function  getData(...$data){
  echo $data[0] ??  '404 Not Found!';
}
getData();