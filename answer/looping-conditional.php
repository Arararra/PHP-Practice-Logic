<?php
  $input = 5;

  echo "Segitiga A: <br>";
    for($i=0; $i<=$input; $i++){
    for($j=1; $j<=$i; $j++){
	  echo "* ";
    }
	  echo "<br>";
    }  

  echo "Segitiga B: <br>";
    for($i=0; $i <= $input; $i++){
    for($j=$input-$i; $j >= 1; $j--){
      echo "* ";
    }
      echo "<br>";
    }

  echo "Segitiga C: <br>";
?>