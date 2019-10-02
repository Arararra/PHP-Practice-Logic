<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama', 'asal' => 'Surabaya'],
    ['id' => 227, 'nama' => 'Renaldy', 'asal' => 'Surabaya'],
    ['id' => 423, 'nama' => 'Fakhri', 'asal' => 'Surabaya'],
  ];

  if (isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
  	$id = "";
  }

  foreach ($input as $key => $value){
    if ($value['id'] == $id){
      $res = $key;
    }
  }

  if (isset($res)):
  	echo "Profil siswa id: ".$input[$res]['id']."<br>";
  	echo "- Id: ".$input[$res]['id']."<br>";
  	echo "- Nama: ".$input[$res]['nama']."<br>";
  	echo "- Asal: ".$input[$res]['asal']."<br>";
?>

<button onclick="window.history.back()">Kembali</button>

<?php
  else:
?>

<table border="1" cellspacing="0">
  <tr>
    <td>Id</td>
    <td>Nama</td>
    <td>Asal</td>
    <td>Link</td>
  </tr>
  <?php foreach ($input as $key => $value): ?>
  <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['nama'] ?></td>
    <td><?php echo $value['asal'] ?></td>
    <td><a href="?id=<?php echo $value['id'] ?>">Profil</a></td>
  </tr>
  <?php endforeach ?>
</table>

<?php endif; ?>