<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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

<body style="background-image: url(img/bg_data.jpg); background-size: cover;">
  <div class="container p-3 my-3 border">
    <h4 class="text-center">Data Mahasiswa</h4>
    <div class="container my-4">
      <a href="">Tambah Data Mahasiswa</a>
      <br>
      <table class="table table-bordered text-center my-3">
        <tr>
          <td>NIM</td>
          <td>Nama Lengkap</td>
          <td>Program Studi</td>
          <td>Tindakan</td>
        </tr>
        <?php
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['programstudi']; ?></td>
            <td><a href="detail.php?nim=<?= $mhs['nim']; ?>">Lihat Detail</a>
          </tr>
        <?php endforeach; ?>
      </table>
      <a href="logout.php" style="text-decoration: none;">Logout</a>
    </div>
  </div>
</body>

</html>