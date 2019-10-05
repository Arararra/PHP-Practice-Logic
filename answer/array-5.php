<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama'],
    ['id' => 287, 'nama' => 'Renaldy'],
    ['id' => 423, 'nama' => 'Fakhri'],
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