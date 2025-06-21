<?php
include "koneksi.php";

$nama   = $_POST["nama"];
$email  = $_POST["email"];
$kepada = $_POST["kepada"];
$pesan  = $_POST["pesan"];
$alamat = $_POST["alamat"];
$no_wa  = $_POST["no_wa"];

$query = mysqli_query($koneksi, "INSERT INTO daftar_tamu (nama, email, tujuan, pesan, alamat, no_wa) VALUES ('$nama', '$email', '$kepada', '$pesan', '$alamat', '$no_wa')");

if ($query) {
    echo "<script>
        alert('Data berhasil disimpan!');
        document.location = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menyimpan data!');
        document.location = 'tambah.php';
    </script>";
}
?>
