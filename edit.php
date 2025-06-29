<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>

<style>
    body {
        background-color: #1e1e1e;
        color: white;
        font-family: Arial, sans-serif;
        padding: 30px;
    }

    h1 {
        text-align: center;
        color: #00ffff;
        margin-bottom: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #2a2a2a;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,255,255,0.2);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #444;
        border-radius: 5px;
        background-color: #1e1e1e;
        color: white;
    }

    input[type="submit"],
    input[type="reset"] {
        background-color: #00ffff;
        color: black;
        font-weight: bold;
        padding: 8px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #00cccc;
    }
</style>


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
