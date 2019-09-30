<?php
  $input = [
    ['id' => 122, 'nama' => 'rama'],
    ['id' => 287, 'nama' => 'renaldy'],
    ['id' => 423, 'nama' => 'fakhri'],
  ];
  $cariKey = 'nama';
  $cariValue = 'fakhri';

  foreach ($input as $key => $value) {
  	if ($value[$cariKey] == $cariValue) {
  		$res = $key;
  	}
  }
  echo "Index ke-$res <br>";
  echo "Id=".$input[$res]['id'].", Nama=".$input[$res]['nama'];
?>