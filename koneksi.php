<?php
function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'akademik');
}

function query($query) {
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
