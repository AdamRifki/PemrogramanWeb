<?php

require 'koneksi.php';

// cek 
if (isset($_POST['tambah'])) {
  tambah($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link rel="icon" type="image/png" href="img/umlogo.png" />
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama:
          <input type="text" name="nama" autofocus>
        </label>
      </li>
      <li>
        <label>
          Nim:
          <input type="text" name="nim">
        </label>
      </li>
      <li>
        <label>
          Program Studi:
          <input type="text" name="programstudi">
        </label>
      </li>
      <li>
        <label>
          Tempat Lahir:
          <input type="text" name="tempatlahir">
        </label>
      </li>
      <li>
        <label>
          Tanggal Lahir:
          <input type="text" name="tanggalahir">
        </label>
      </li>
      <li>
        <label>
          Jenis Kelamin:
          <input type="text" name="jeniskelamin">
        </label>
      </li>
      <li>
        <label>
          Agama:
          <input type="text" name="agama">
        </label>
      </li>
      <li>
        <label>
          Alamat:
          <input type="text" name="alamat">
        </label>
      </li>
      <li>
        <label>
          kota:
          <input type="text" name="kota">
        </label>
      </li>
      <li>
        <label>
          provinsi:
          <input type="text" name="provinsi">
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>