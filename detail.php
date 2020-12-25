<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'koneksi.php';

// ambil nim dari url
$nim = $_GET['nim'];

// query mahasiswa berdasarkan nim
$mahasiswa = query("SELECT * FROM mahasiswa WHERE nim = $nim");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h3>Detail Mahasiswa</h3>
    <ul>
      <li><?= $mahasiswa['nim']; ?></li>
      <li><?= $mahasiswa['nama']; ?></li>
      <li><?= $mahasiswa['programstudi']; ?></li>
      <li><?= $mahasiswa['tempatlahir']; ?></li>
      <li><?= $mahasiswa['tanggalahir']; ?></li>
      <li><?= $mahasiswa['jeniskelamin']; ?></li>
      <li><?= $mahasiswa['agama']; ?></li>
      <li><?= $mahasiswa['alamat']; ?></li>
      <li><?= $mahasiswa['kota']; ?></li>
      <li><?= $mahasiswa['provinsi']; ?></li>
      <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
      <li><a href="data_daftar_singkat.php">Kembali Ke Daftar Mahasiswa</a></li>
    </ul>
  </div>
</body>

</html>