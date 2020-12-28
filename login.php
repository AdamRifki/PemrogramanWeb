<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: data_daftar_singkat.php");
    exit;
}
require 'koneksi.php';

// ketika tombol ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="icon/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image/png" href="img/umlogo.png" />
</head>

<body style="background-image: url(img/robot.jpg); background-size: cover;">
    <div class="container">
        <h4 class="text-center">FORM LOGIN</h4>
        <hr>
        <form action="" method="POST">
            <?php if (isset($login['error'])) : ?>
                <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
            <?php endif; ?>
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
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda" required>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Masuk</button>
            <button type="submit" class="btn btn-secondary" onclick="window.location.href='registrasi.php'">Daftar</button>
        </form>
    </div>

</body>

</html>