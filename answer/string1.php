<?php
  echo "No. 1: <br>";
    $input0 = "SMKN 2 Surabaya";
    echo "$input0 => ".strrev($input0)."<br>";
  echo "<br>";

  $result = "";
  $var = "smkn2";
  $lastindex = strlen($var)-1;
  for ($i=$lastindex; $i>=0; $i++) { 
    $result = $result."/".$var[$i];
  }
  echo $result;

  $tp = "smkn 2 surabaya"
  $rsl = "";
  $vr = "$tp";
  $lastindex = strlen($vr)-1;
  for ($i=$lastindex; $i>=0; $i++) { 
    $result = $result."/".$var[$i];
  }
  echo $rsl;  
?>
