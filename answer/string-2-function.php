<?php
  $input = "renaldy";
  $input2 = "renaldy dan sahabat";
  $penanda = "/";

  function tandaString($string, $penanda){
    $gabung = str_replace(' ', '', $string);
    $arrstr = str_split($gabung);
    $sizeof = sizeof($arrstr);
    $hasil = "";

    for ($i=0; $i < $sizeof; $i++) { 
      if ($i-$sizeof < -1) {
        $hasil = $hasil.$arrstr[$i].$penanda;
      }else{
        $hasil = $hasil.$arrstr[$i];
      }
    }
    return $hasil;
  }

  echo "$input => ".tandaString($input, $penanda);
  echo "<br>";
  echo "$input2 => ".tandaString($input2, $penanda);
?>