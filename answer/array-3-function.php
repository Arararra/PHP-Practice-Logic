<?php
  $input = [3, 5, 7, 9, 6];

  function cariIndex($input, $cariValue){
    $res = -1;
    foreach ($input as $key => $value){ 
      if($value == $cariValue){
        $res = $key;
      }
    }
    return $res;
  }
    
  echo "Index ke ".cariIndex($input, 9);
?>