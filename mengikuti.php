<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body>
    <!-- Container -->
    <div class="container p-3 my-3 border">
        <h5 class="text-center">Form Daftar Peserta</h5>
        <div class="alert alert-primary">
            <strong>Data Peserta</strong>
        </div>
        <!-- Column NIM dan Kelas -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nomor Induk Mahasiswa (NIM):</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan Nomor NIM">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Kelas:</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas">
                </div>
            </div>
        </div>
        <!-- Column jyang Menyangkut Ujian -->
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>ID Mata Ujian:</label>
                    <input type="text" name="mataujian" class="form-control" placeholder="Masukan Mata Ujian">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Hari Ujian:</label>
                    <input type="text" name="hariujian" class="form-control" placeholder="Masukan Hari Ujian">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Jam Ujian:</label>
                    <input type="text" name="jamujian" class="form-control" placeholder="Masukan Jam Ujian">
                </div>
            </div>
        </div>
        <!-- Column Nilai -->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nilai Angka:</label>
                    <input type="text" name="nilaiangka" class="form-control" placeholder="Masukan Nilai Angka">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nilai Huruf:</label>
                    <input type="text" name="nilaihuruf" class="form-control" placeholder="Masukan Nilai Huruf">
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </div>
</body>
</html>