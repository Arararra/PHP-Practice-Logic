<?php
  function segitigaA($input){
    for($i=0; $i<=$input; $i++){
    for($j=1; $j<=$i; $j++){
      echo "* ";
    }
      echo "<br>";
    }
  }
  function segitigaB($input){
    for($i=0; $i<=$input; $i++){
    for($j=$input-$i; $j>=1; $j--){
      echo "* ";
    }
      echo "<br>";
    }
  }
  function segitigaC($input){
    for($i=$input; $i>0; $i--){
    for ($k=0; $k<$i; $k++) { 
      echo "&nbsp&nbsp&nbsp";
    }
    for($j=$input; $j>=$i; $j--){
      echo "* ";
    }
      echo "<br>";
    }
  }
  function segitigaD($input){
    for( $i=1; $i<=$input; $i++){
    for($k=1; $k<=$i; $k++){
      echo "&nbsp&nbsp&nbsp";
    }
    for($j=$input; $j>=$i; $j--){
      echo "* ";
    }
      echo "<br> ";
    }
  }

  echo "segitiga A: <br>";
  segitigaA(5);
  echo "segitiga B: <br>";
  segitigaB(5);
  echo "segitiga C: <br>";
  segitigaC(5);
  echo "segitiga D: <br>";
  segitigaD(5);
?>