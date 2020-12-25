<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'akademik');
}

function query($query)
{
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, $query);

    // jika hanya mengambil 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{

    $koneksi = koneksi();

    $nama = $data['nama'];
    $nim = $data['nim'];
    $programstudi = $data['programstudi'];
    $tempatlahir = $data['tempatlahir'];
    $tanggalahir = $data['tanggalahir'];
    $jeniskelamin = $data['jeniskelamin'];
    $agama = $data['agama'];
    $alamat = $data['alamat'];
    $kota = $data['kota'];
    $provinsi = $data['provinsi'];

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$nim', '$programstudi', '$tempatlahir', '$tanggalahir', '$jeniskelamin', 
    '$agama', '$alamat', '$kota', '$provinsi')";
    mysqli_query($koneksi, $query);
}

function login($data)
{
    $koneksi = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek dulu usernamenya
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])) {
            // set session
            $_SESSION['login'] = true;
            header("Location: data_daftar_singkat.php");
            exit;
        }
    }
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
}

function registrasi($data)
{
    $koneksi = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($koneksi, $data['password1']);
    $password2 = mysqli_real_escape_string($koneksi, $data['password2']);

    // jika username dan password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
        alert('Username / Password Tidak Boleh Kosong!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
        alert('Username Sudah Terdaftar!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
        alert('Konfirmasi Password Tidak Sesuai!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika password lebih kecil dari 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
        alert('Password Terlalu Pendek!');
        document.location.href = 'registrasi.php';
        </script>";
        return false;
    }

    // jika username && password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user VALUES
    (null, '$username', '$password_baru')";

    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
}
