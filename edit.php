<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>

<h1>Edit Data Tamu</h1>
<form action="edit_action.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
            <td>Kepada</td>
            <td><input type="text" name="kepada" value="<?php echo $data['tujuan']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>No WA</td>
            <td><input type="text" name="no_wa" value="<?php echo $data['no_wa']; ?>"></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td><textarea name="pesan" cols="30" rows="3"><?php echo $data['pesan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"> <input type="reset" value="Batal"></td>
        </tr>
    </table>
</form>
