<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body>
    <!-- Colum Container -->
    <div class="container p-3 my-3 border">
        <h5 class="text-center">Form Data Mahasiswa</h5>
        <div class="alert alert-primary">
            <strong>Data Diri</strong>
        </div>
        <!-- Column Mahasiswa -->
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nomor Induk Mahasiswa (NIM):</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan Nomor NIM">
                </div>
            </div>
            <!-- Column Program Studi -->
            <div class="col-sm-3">
                <dqiv class="form-group">
                    <label>Program Studi:</label>
                    <select class="form-control" name="prstudi">
                        <option>Pilih</option>
                        <option value="1">Informatika</option>
                        <option value="2">Teknologi Informasi</option>
                        <option value="3">Sistem Informasi</option>
                    </select>
                </dqiv>
            </div>
        </div>
        <!-- Column Tempat dan Tanggal Lahir -->
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
            </div>
            <!-- Column Jenis Kelamin dan Agama -->
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <select class="form-control" name="jk">
                        <option>Pilih</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Agama:</label>
                    <select class="form-control" name="agama">
                        <option>Pilih</option>
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
                    <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Kota:</label>
                    <input type="text" name="kota" class="form-control" placeholder="Kota">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Provinsi:</label>
                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
</body>

</html>