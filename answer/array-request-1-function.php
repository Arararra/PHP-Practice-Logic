<?php
  include 'function.php';

  $input = [
    ['id' => 122, 'nama' => 'Rama', 'asal' => 'Surabaya'],
    ['id' => 227, 'nama' => 'Renaldy', 'asal' => 'Surabaya'],
    ['id' => 423, 'nama' => 'Fakhri', 'asal' => 'Surabaya'],
  ];

  if (isset($_GET['id'])):
  $id = $_GET['id'];
  $res = findSame($input, 'id', $id);
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

<table border="1" cellspacing="0">
  <tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Asal</th>
    <th>Link</th>
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
</body>
</html>