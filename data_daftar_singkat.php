<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'koneksi.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di tekan
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}
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

<body style="background-image: url(img/bg_data.jpg); background-size: cover;">
  <div class="container p-3 my-3 border bg-light">
    <h4 class="text-center">Data Mahasiswa</h4>
    <div class="container my-4">
      <a href="daftar.php" class="btn btn-primary" role="button">Tambah Data Mahasiswa</a>
      <br><br>

      <form action="" method="POST">
        <div class="form-row">
          <div class="col-sm-5">
            <input class="form-control form-control-sm" type="text" name="keyword" placeholder="Masukan Keyword Pencarian..." autocomplete="off" autofocus>
          </div>
          <div class="col-sm">
            <button class="btn btn-link" type="submit" name="cari">Cari</button>
          </div>
        </div>


      </form>

      <table class="table table-sm table-bordered text-center my-3">
        <tr>
          <td>No</td>
          <td>NIM</td>
          <td>Nama Lengkap</td>
          <td>Program Studi</td>
          <td>Tindakan</td>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
          <tr>
            <td colspan="5">
              <p class="m-2 py-2">Data Mahasiswa Tidak Ditemukan!</p>
            </td>
          </tr>
        <?php endif; ?>

        <?php
        $no = 0;
        foreach ($mahasiswa as $mhs) : $no++; ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['programstudi']; ?></td>
            <td><a href="data_daftar.php?nim=<?= $mhs['nim']; ?>">Lihat Detail</a>
          </tr>
        <?php endforeach; ?>
      </table>
      <a href="logout.php" class="btn btn-secondary" role="button">Logout</a>
    </div>
  </div>
</body>

</html>