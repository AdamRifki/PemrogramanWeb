<?php
require 'koneksi.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('User Baru Berhasil Ditambahkan. Silahkan Login!');
        document.location.href = 'login.php';
        </script>";
  } else {
    echo 'User Gagal Ditambahkan';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="icon/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <div class="container">
    <h4 class="text-center">Form Registrasi</h4>
    <hr>
    <form action="" method="POST">

      <div class="form-group">
        <label>Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda" autofocus autocomplete="off" required>
        </div>
      </div>

      <div class="form-group">
        <label>Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" name="password1" class="form-control" placeholder="Masukan Password Anda" required>
        </div>
      </div>

      <div class="form-group">
        <label>Konfirmasi Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password Anda" required>
        </div>
      </div>
      <button type="submit" name="registrasi" class="btn btn-primary" style="width: 100%;">DAFTAR</button>
  </div>
  </form>
</body>

</html>