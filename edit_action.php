<?php
include "koneksi.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$kepada = $_POST['kepada'];
$alamat = $_POST['alamat'];
$no_wa  = $_POST['no_wa'];
$pesan  = $_POST['pesan'];

$query = mysqli_query($koneksi, "
    UPDATE daftar_tamu SET
        nama = '$nama',
        email = '$email',
        tujuan = '$kepada',
        alamat = '$alamat',
        no_wa = '$no_wa',
        pesan = '$pesan'
    WHERE id = '$id'
");

if ($query) {
    echo "<script>
        alert('Data berhasil diupdate!');
        document.location = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal update data!');
        document.location = 'edit.php?id=$id';
    </script>";
}
?>
