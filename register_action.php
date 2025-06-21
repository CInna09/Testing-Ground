<?php
include "koneksi.php";

$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']); // perbaikan di sini

// insert ke mysql table pengguna
$query = mysqli_query($koneksi, "INSERT INTO pengguna (nama, username, password, level)
VALUES ('$nama', '$username', '$password', 'user')");
?>

<script>
alert("REGISTER TAMU BERHASIL");
document.location = "index.php";
</script>
