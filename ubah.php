<?php
require 'koneksi.php';

// jika tidak ada nim di url
if (!isset($_GET['nim'])) {
  header("Location: data_daftar_singkat.php");
  exit;
}

// ambil nim dari url
$nim = $_GET['nim'];

// query mahasiswa berdasarkan nim
$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data berhasil Diubah');
                document.location.href = 'data_daftar_singkat.php';
              </script>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>Data Gagal Diubah!</div>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="icon" type="image/png" href="img/umlogo.png" />
</head>

<body>
  <!-- Colum Container -->
  <div class="container p-3 my-3 border">
    <h5 class="text-center">Form Ubah Data Mahasiswa</h5>
    <div class="alert alert-primary">
      <strong>Data Diri</strong>
    </div>
    <!-- Column Mahasiswa -->
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-5">
          <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" value="<?= $mhs['nama']; ?>" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" autofocus required>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nomor Induk Mahasiswa (NIM):</label>
            <input type="text" value="<?= $mhs['nim']; ?>" name="nim" class=" form-control" placeholder="Masukan Nomor NIM" required>
          </div>
        </div>
        <!-- Column Program Studi -->
        <div class="col-sm-3">
          <div class="form-group">
            <label>Program Studi:</label>
            <select class="form-control" name="programstudi" required>
              <option value="" <?= ($mhs['programstudi'] == '') ? "selected" : ""; ?>>Pilih</option>
              <option value="Informatika" <?= ($mhs['programstudi'] == 'Informatika') ? "selected" : ""; ?>>Informatika</option>
              <option value="Teknologi Informasi" <?= ($mhs['programstudi'] == 'Teknologi Informasi') ? "selected" : ""; ?>>Teknologi Informasi</option>
              <option value="Sistem Informasi" <?= ($mhs['programstudi'] == 'Sistem Informasi') ? "selected" : ""; ?>>Sistem Informasi</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Column Tempat dan Tanggal Lahir -->
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Tempat Lahir:</label>
            <input type="text" value="<?= $mhs['tempatlahir']; ?>" name="tempatlahir" class="form-control" placeholder="Masukan Tempat Lahir" required>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" value="<?= $mhs['tanggalahir']; ?>" name="tanggalahir" class="form-control" required>
          </div>
        </div>
        <!-- Column Jenis Kelamin dan Agama -->
        <div class="col-sm-5">
          <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select class="form-control" name="jeniskelamin" required>
              <option value="" <?= ($mhs['jeniskelamin'] == '') ? "selected" : ""; ?>>Pilih</option>
              <option value="L" <?= ($mhs['jeniskelamin'] == 'L') ? "selected" : ""; ?>>Laki-Laki</option>
              <option value="P" <?= ($mhs['jeniskelamin'] == 'P') ? "selected" : ""; ?>>Perempuan</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Agama:</label>
            <select class="form-control" name="agama" required>
              <option value="" <?= ($mhs['agama'] == '') ? "selected" : ""; ?>>Pilih</option>
              <option value="Islam" <?= ($mhs['agama'] == 'Islam') ? "selected" : ""; ?>>Islam</option>
              <option value="Kristen" <?= ($mhs['agama'] == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
              <option value="Katolik" <?= ($mhs['agama'] == 'Katolik') ? "selected" : ""; ?>>Katolik</option>
              <option value="Hindu" <?= ($mhs['agama'] == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
              <option value="Budha" <?= ($mhs['agama'] == 'Budha') ? "selected" : ""; ?>>Budha</option>
              <option value="Lainnya" <?= ($mhs['agama'] == 'Lainnya') ? "selected" : ""; ?>>Lainnya</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Column Alamat -->
      <div class="alert alert-primary">
        <strong>Data Alamat</strong>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="form-group">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat" rows="2" id="alamat" required><?= $mhs['alamat']; ?></textarea>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Kota:</label>
            <input type="text" value="<?= $mhs['kota']; ?>" name="kota" class="form-control" placeholder="Kota" required>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Provinsi:</label>
            <input type="text" value="<?= $mhs['provinsi']; ?>" name="provinsi" class="form-control" placeholder="Provinsi" required>
          </div>
        </div>
      </div>
      <!-- Button -->
      <div class="row">
        <div class="col-sm-4">
          <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </div>
    </form>
</body>

</html>