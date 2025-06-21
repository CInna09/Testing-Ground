<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM daftar_tamu WHERE id = '$id'");

if ($query) {
    echo "<script>
        alert('HAPUS DATA BERHASIL');
        window.location = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('GAGAL HAPUS DATA');
        window.location = 'index.php';
    </script>";
}
?>
