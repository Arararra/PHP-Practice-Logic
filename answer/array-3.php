<?php
  $input = [3, 5, 7, 9, 6];
  $cari = 9;
  
  $res = -1;
  foreach ($input as $key => $value) {
    if ($value == $cari) {
      $res = $key;
    }
  }
  echo "index ke ".$res;
?>