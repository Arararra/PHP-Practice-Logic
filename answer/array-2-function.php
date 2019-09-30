<?php
  echo "No. 2 <br>";
    $input = [1, 3, 2, 9, 4];

    function balikarray($arr){
  	  for ($i = count($arr)-1; $i >= 0; $i--){
        print($arr[$i]."<br>");
	  }
    }

    echo balikarray($input);
?>