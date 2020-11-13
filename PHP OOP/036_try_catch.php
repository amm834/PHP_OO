<?php
// Try Catch

// If File Not Exist message fileNotFound
function fileNotFound() {
  throw new Exception('File Not Found!');
}
set_error_handler("fileNotFound");

try {
  $file_name = "fileName.php";
  fopen($file_name, 'r');
}catch(Exception $e) {
  echo $e->getMessage();
}