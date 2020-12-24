<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body>
    <div class="container p-3 my-3 border">
        <h5 class="text-center">Form Data Ujian</h5>
        <!-- Column Ujian -->
        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID Mata Ujian:</label>
                    <input type="text" name="mataujian" class="form-control" placeholder="Masukan Mata Ujian">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama Ujian:</label>
                    <input type="text" name="namaujian" class="form-control" placeholder="Masukan Nama Ujian">
                </div>
            </div>
        </div>
        <!-- Column Program Studi dan SKS-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Program Studi:</label>
                    <select class="form-control" name="prstudi">
                        <option>Pilih</option>
                        <option value="1">Informatika</option>
                        <option value="2">Teknologi Informasi</option>
                        <option value="3">Sistem Informasi</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>SKS:</label>
                    <input type="text" name="sks" class="form-control" placeholder="Masukan SKS">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Biaya Ujian:</label>
                    <input type="text" name="biayaujian" class="form-control" placeholder="Masukan Biaya Ujian">
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