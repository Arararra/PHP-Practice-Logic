<?php
  $input = [
    ['id' => 122, 'nama' => 'rama'],
    ['id' => 287, 'nama' => 'renaldy'],
    ['id' => 423, 'nama' => 'fakhri'],
  ];
  $cari = '122';

  foreach ($input as $key => $value) {
  	if ($value['id'] == $cari) {
  		$res = $key;
  	}
  }
  echo "Index ke-$res <br>";
  echo "Id= ".$input[$res]['id'].", Nama= ".$input[$res]['nama'];
?>