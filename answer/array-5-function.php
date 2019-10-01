<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  function cariVal($arr, $carId, $carVal){
    $res = -1;
    foreach ($arr as $key => $value){
      if ($value[$carId] == $carVal){
        $res = $key;
      }
    }
    return $res;
  }

  $res = cariVal($input, 'id', 423);
  echo "Index ke-".$res."<br>";
  echo "Id= ".$input[$res]['id'].", Nama= ".$input[$res]['nama'];
?>