<?php
  $input = [3, 5, 7, 9, ];

  function cariIndex($input, $cariValue){
    $res = -1;
    foreach ($input as $key => $value){ 
      if($value == $cariValue){
        $res = $key;
      }
    }
    return $res;
  }
    
  echo cariIndex($input, 7);
?>