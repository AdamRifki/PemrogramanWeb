<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'koneksi.php';

// ambil nim
$nim = $_GET['nim'];

$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/umlogo.png" />
</head>

<body>
  <div class="container p-3 my-3 border">
    <h4 class="text-center">Data Lengkap Mahasiswa</h4>
    <div class="container my-4">
      <a href="data_daftar_singkat.php" class="btn btn-primary" role="button">Kembali</a>
      <hr>
      <table class="table table-sm table-bordered text-center">
        <br>
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
          <td>
            <a href="ubah.php?nim=<?= $mhs['nim']; ?>" class="btn btn-primary m-1" role="button">Ubah</a>
            <a href="hapus.php?nim=<?= $mhs['nim']; ?>" onclick="return confirm('Apakah Anda Yakin?');" class="btn btn-light" role="button">Hapus</a>
          </td>
        </tr>
      </table>
    </div>
  </div>

</body>

</html>