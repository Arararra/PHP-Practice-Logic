<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  function cariVal($arr, $carId, $carVal){
    $res = "Data tidak ada.";
    foreach ($arr as $key => $value){
      if ($value[$carId] == $carVal){
        $res = $key;
        echo "Index ke ".$res."<br>";
        echo "Id = ".$value['id']."<br>";
        echo "Nama = ".$value['nama']."<br>";
      }
    }
    if ($res != null){
      if ($res > 0) {
        $res = "";
      }
      echo $res;
    }
  }

  cariVal($input, 'id', 423);
?>