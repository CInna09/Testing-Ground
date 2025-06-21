<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Tamu</title>
</head>
<body>
    <!-- halaman create -->
    <form action="tambah_action.php" method="POST">
        <table>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>No WA</td>
                <td><input type="text" name="no_wa" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>Kepada</td>
                <td><input type="text" name="kepada" /></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" cols="30" rows="3"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <input type="submit" value="SIMPAN" />
                    <input type="reset" value="CANCEL" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
