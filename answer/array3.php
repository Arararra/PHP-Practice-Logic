<?php
  echo "No. 3 <br>";
    $input = [3, 5, 7, 9, 6];
    $cari = 9;
    foreach ($input as $key => $value) {
      if ($value == $cari) {
        $res = $key;
      }
    }
  echo "index ke-".$res;
?>