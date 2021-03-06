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

function tambah($data)
{

    $koneksi = koneksi();

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $programstudi = htmlspecialchars($data['programstudi']);
    $tempatlahir = htmlspecialchars($data['tempatlahir']);
    $tanggalahir = htmlspecialchars($data['tanggalahir']);
    $jeniskelamin = htmlspecialchars($data['jeniskelamin']);
    $agama = htmlspecialchars($data['agama']);
    $alamat = htmlspecialchars($data['alamat']);
    $kota = htmlspecialchars($data['kota']);
    $provinsi = htmlspecialchars($data['provinsi']);

    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$programstudi', '$tempatlahir', '$tanggalahir', '$jeniskelamin', 
        '$agama', '$alamat', '$kota', '$provinsi')";

    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    return mysqli_affected_rows($koneksi);
}

function hapus($nim)
{
    $koneksi = koneksi();

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $nim") or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{

    $koneksi = koneksi();

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $programstudi = htmlspecialchars($data['programstudi']);
    $tempatlahir = htmlspecialchars($data['tempatlahir']);
    $tanggalahir = htmlspecialchars($data['tanggalahir']);
    $jeniskelamin = htmlspecialchars($data['jeniskelamin']);
    $agama = htmlspecialchars($data['agama']);
    $alamat = htmlspecialchars($data['alamat']);
    $kota = htmlspecialchars($data['kota']);
    $provinsi = htmlspecialchars($data['provinsi']);

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                programstudi = '$programstudi',
                tempatlahir = '$tempatlahir',
                tanggalahir = '$tanggalahir',
                jeniskelamin = '$jeniskelamin',
                agama = '$agama',
                alamat = '$alamat',
                kota = '$kota',
                provinsi = '$provinsi'
                WHERE nim = $nim";

    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $koneksi = koneksi();

    $query = "SELECT * FROM mahasiswa
                WHERE nama LIKE '%$keyword%'
                OR nim LIKE '%$keyword%'
                OR programstudi LIKE '%$keyword%'
                ";

    $result = mysqli_query($koneksi, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
