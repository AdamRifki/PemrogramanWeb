<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="icon/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body style="background-image: url(img/robot.jpg); background-size: cover;">
    <div class="container">
        <h4 class="text-center">FORM LOGIN</h4>
        <hr> 
        <form action="login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
                </div>
            </div>

            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Masuk</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>
    <!-- logika session -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    </div>
</body>

</html>