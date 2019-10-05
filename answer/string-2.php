<?php
  $input = "renaldy";
  $penanda = "/";

  $arrstr = str_split($input);
  $sizeof = sizeof($arrstr);
  $gabung = "";

  for ($i=0; $i < $sizeof; $i++) { 
  	if ($i-$sizeof < -1) {
  	  $gabung = $gabung.$arrstr[$i].$penanda;
  	}else{
  	  $gabung = $gabung.$arrstr[$i];
  	}
  }

  echo $input." => ".$gabung;
?>
<br>
<?php
  $input2 = "renaldy dan sahabat";
  $penanda2 = "/";
  $gabung = str_replace(' ', '', $input2);

  $arrstr2 = str_split($gabung);
  $sizeof = sizeof($arrstr2);
  $hasil = "";

  for ($i=0; $i < $sizeof; $i++) { 
  	if ($i-$sizeof < -1) {
  	  $hasil = $hasil.$arrstr2[$i].$penanda2;
  	}else{
  	  $hasil = $hasil.$arrstr2[$i];
  	}
  }

  echo $input2." => ".$hasil;
?>