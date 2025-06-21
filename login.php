<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Silakan Login</h1>
    <form action="cek_login.php" method="POST">
        <table>
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
                    <input type="submit" value="LOGIN">
                    <input type="reset" value="CANCEL">
                </td>
            </tr>
        </table>
    </form>
    BUTUH DANA??? SILAHHKAN REGISTER!! <br>
    <a href="register.php">REGISTER</a>
</body>
</html>
