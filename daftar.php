<?php
require 'koneksi.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil Ditambahkan');
                document.location.href = 'data_daftar_singkat.php';
              </script>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Data Gagal Ditambahkan!</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="img/umlogo.png" />
</head>

<body>
    <!-- Colum Container -->
    <div class="container p-3 my-3 border">
        <h5 class="text-center">Form Input Data Mahasiswa</h5>
        <div class="alert alert-primary">
            <strong>Data Diri</strong>
        </div>
        <!-- Column Mahasiswa -->
        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" autofocus required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nomor Induk Mahasiswa (NIM):</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukan Nomor NIM" required>
                    </div>
                </div>
                <!-- Column Program Studi -->
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Program Studi:</label>
                        <select class="form-control" name="programstudi" required>
                            <option value="">Pilih</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Column Tempat dan Tanggal Lahir -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempatlahir" class="form-control" placeholder="Masukan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggalahir" class="form-control" required>
                    </div>
                </div>
                <!-- Column Jenis Kelamin dan Agama -->
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jeniskelamin" required>
                            <option value="" selected>Pilih</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama" required>
                            <option value="" selected>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
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
                        <textarea class="form-control" name="alamat" rows="2" id="alamat" required></textarea>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kota:</label>
                        <input type="text" name="kota" class="form-control" placeholder="Kota" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
</body>

</html>