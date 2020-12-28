<?php 
require 'koneksi.php';

// jika tidak ada nim di url
if (!isset($_GET['nim'])) {
  header("Location: data_daftar_singkat.php");
  exit;
}

// mengambil nim dari url
$nim = $_GET['nim'];

  if (hapus($nim) > 0) {
    echo "<script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'data_daftar_singkat.php';
              </script>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>Data Gagal Dihapus!</div>";
  }
