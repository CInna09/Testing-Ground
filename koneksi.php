<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "buku_tamu";

    // membuat koneksi
    $koneksi = mysqli_connect($host, $user, $password, $db);

    // cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>

