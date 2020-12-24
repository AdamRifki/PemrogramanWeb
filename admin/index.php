<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h2>Halaman Admin</h2>
        <br />
    </div>


    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:admin/index.php?pesan=belum_login");
    }
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">Selamat datang,
            <?php
            echo $_SESSION['username'];
            ?>!
            anda telah login.</div>
    </div>

    <br />
    <br />

    <a href="logout.php">Logout</a>
</body>

</html>