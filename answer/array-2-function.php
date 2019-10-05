<?php
  $input = [1, 3, 2, 9, 4];

  function balikarray($arr){
    $balik = count($arr)-1;
  	for ($i = $balik; $i >= 0; $i--){
      print($arr[$i]."<br>");
	}
  }

  balikarray($input);
?>