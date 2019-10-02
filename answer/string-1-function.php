<?php
  $input = "SMKN 2 Surabaya";

  function balikString($string){
    $reverse = strlen($string)-1;
    for ($i=$reverse; $i>=0; $i--) { 
      $result = $string[$i];
      echo $result;
    }
  }

  echo "$input => ";
  echo balikString($input);
?>
