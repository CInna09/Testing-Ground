<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

// Query cek di mysql
$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
$data = mysqli_fetch_assoc($query);
$cek_hasil = mysqli_num_rows($query);

if ($cek_hasil > 0) {
    $_SESSION['username'] = $data['username'];
    ?>
    <script>
        alert("LOGIN SUKSES, SELAMAT DATANG <?php echo $data['username']; ?>");
        document.location = "index.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("LOGIN GAGAL, USERNAME ATAU PASSWORD SALAH!");
        document.location = "login.php";
    </script>
    <?php
}
?>
