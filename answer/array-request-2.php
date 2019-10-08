<?php
  $input = [
    ['id' => 122, 'nama' => 'Rama', 'asal' => 'Surabaya'],
    ['id' => 227, 'nama' => 'Renaldy', 'asal' => 'Surabaya'],
    ['id' => 423, 'nama' => 'Fakhri', 'asal' => 'Surabaya'],
  ];
  $resultArray = [];

  if (isset($_GET['cari'])) {
    if ($_GET['cari'] != ""){
      // jika ada cari memiliki parameter
      $cari = $_GET['cari'];
      foreach ($input as $key => $value){
        if (strpos($value['id'], $cari) !== false){
          array_push($resultArray, $value);
        }
      }
    }else{
      // jika ada cari
      $resultArray = $input;
    }
  }else{
    // jika tidak ada parameter cari
    $resultArray = $input;
  }

  if (isset($_GET['id'])):
  $id = $_GET['id'];
  foreach ($input as $key => $value){
    if ($value['id'] == $id){
      $res = $key;
    }
  }
?>

<p><?php echo "Menampilkan profil siswa id: ".$input[$res]['id'] ?></p>
<p>
  - ID: <?php echo $input[$res]['id'] ?><br>
  - Nama: <?php echo $input[$res]['nama'] ?><br>
  - Asal: <?php echo $input[$res]['asal'] ?><br>
</p>
<button onclick="window.history.back()">Kembali</button>

<?php
  else:
?>

<form action="#" method="get">
  <input type="number" name="cari" placeholder="cari">
  <input type="submit" value="filter">
  <input type="reset" value="reset">
</form>

<table border="1" style="border-collapse: collapse;">
  <tr>
    <th>id</th>
    <th>nama</th>
    <th>asal</th>
    <th>link</th>
  </tr>
  <?php foreach ($resultArray as $key => $value): ?>
  <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['nama'] ?></td>
    <td><?php echo $value['asal'] ?></td>
    <td><a href="?id=<?php echo $value['id'] ?>">Profil</a></td>
  </tr>
  <?php endforeach; ?>
</table>

<?php endif; ?>