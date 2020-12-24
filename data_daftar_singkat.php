<?php
require 'koneksi.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Daftar Ujian</title>
</head>

<body>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Nama Lengkap</th>
      <th>NIM</th>
      <th>Tindakan</th>
    </tr>
    <?php
    foreach ($mahasiswa as $mhs) :
    ?>
      <tr>
        <td>1</td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td>
          <a href="detail.php?nim=<?= $mhs['nim']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>