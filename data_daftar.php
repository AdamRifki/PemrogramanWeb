<?php
require 'koneksi.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container p-3 my-3 border">
    <h4 class="text-center">Data Daftar Mahasiswa</h4>
    <div class="container my-4">
      <table class="table table-bordered text-center">
        <tr>
          <td>NIM</td>
          <td>Nama Lengkap</td>
          <td>Program Studi</td>
          <td>Tempat Lahir</td>
          <td>Tanggal Lahir</td>
          <td>Jenis Kelamin</td>
          <td>Agama</td>
          <td>Alamat</td>
          <td>Kota</td>
          <td>Provinsi</td>
          <td>Tindakan</td>
        </tr>
        <?php
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['programstudi']; ?></td>
            <td><?= $mhs['tempatlahir']; ?></td>
            <td><?= $mhs['tanggalahir']; ?></td>
            <td><?= $mhs['jeniskelamin']; ?></td>
            <td><?= $mhs['agama']; ?></td>
            <td><?= $mhs['alamat']; ?></td>
            <td><?= $mhs['kota']; ?></td>
            <td><?= $mhs['provinsi']; ?></td>
            <td><a href="">Ubah</a> <hr> <a href="">Hapus</a></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

</body>

</html>