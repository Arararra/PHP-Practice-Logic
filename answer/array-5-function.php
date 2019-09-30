<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  function cariId($arr, $carId, $carVal){
    foreach ($arr as $key => $value){
      if ($value[$carId] == $carVal){
        $res = $key;
        return $res;
      }
    }
  }

  $res = cariId($input, 'id', 423);
  echo "Index ke-".$res."<br>";
  echo "Id= ".$input[$res]['id'].", Nama= ".$input[$res]['nama'];
?>