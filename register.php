<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Tamu</title>
</head>
<body>
    <h1>FORM REGISTRASI TAMU</h1>
    <form action="register_action.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="BATAL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
