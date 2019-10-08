<!DOCTYPE html>
<html>
<head>
  <title>array-request-2</title>
  <style type="text/css">
    *{
      font-family: calibri;
    }
    table{
      border-collapse: collapse;
      width: 100%;
    }
    th{
      background: #36c9a5;
    }
    tr:nth-child(odd){
      height: 30px;
      background-color: #f2f2f2;
    }
    tr:nth-child(even){
      height: 30px;
      background-color: white;
    }
    input{
      font-size: 16px;
      padding: 12px 20px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }
  </style>
</head>
<body>
<?php
  include 'function.php';

  $input = [
    ['id' => 122, 'nama' => 'Rama', 'asal' => 'Surabaya'],
    ['id' => 227, 'nama' => 'Renaldy', 'asal' => 'Surabaya'],
    ['id' => 423, 'nama' => 'Fakhri', 'asal' => 'Surabaya'],
  ];
       
  if (isset($_GET['cari'])){
    if ($_GET['cari'] != ""){
      $cari = $_GET['cari'];
      $resultArray = findContains($input, 'id', $cari);
    }else{
      $resultArray = $input;
    }
  }else{
    $resultArray = $input;
  }

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
</body>
</html>