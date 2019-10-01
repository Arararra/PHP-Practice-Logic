<?php
  $input = [1, 3, 2, 9, 4];

  function arraykali($arr, $angka){
    foreach ($arr as $key) {
      echo $key*=$angka;
      echo "<br>";
    }
  }

  echo arraykali($input, 3);
?>