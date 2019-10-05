<?php
  $input = "SMKN 2 Surabaya";
  echo "$input => ";

  $reverse = strlen($input)-1;
  for ($i=$reverse; $i>=0; $i--) { 
    $result = $input[$i];
    echo $result;
  }
?>