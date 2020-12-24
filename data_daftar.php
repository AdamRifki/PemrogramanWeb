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
      <th>Program Studi</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Alamat</th>
      <th>Kota</th>
      <th>Provinsi</th>
      <th>Tindakan</th>
    </tr>
    <?php
    foreach ($mahasiswa as $mhs) :
    ?>
      <tr>
        <td>1</td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['programstudi']; ?></td>
        <td><?= $mhs['tempatlahir']; ?></td>
        <td><?= $mhs['tanggalahir']; ?></td>
        <td><?= $mhs['jeniskelamin']; ?></td>
        <td><?= $mhs['agama']; ?></td>
        <td><?= $mhs['alamat']; ?></td>
        <td><?= $mhs['kota']; ?></td>
        <td><?= $mhs['provinsi']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>