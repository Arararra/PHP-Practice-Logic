<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
  ];

  function cariId($arr, $cariId){
    $res = -1;
    foreach ($arr as $key => $value){
      if ($value['id'] == $cariId){
        $res = $key;
      }
    }
    return $res;
  }

  $res = cariId($input, 122);
  echo "Index ke-".$res."<br>";
  echo "Id= ".$input[$res]['id'].", Nama= ".$input[$res]['nama'];
?>