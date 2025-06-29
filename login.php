<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background-color: #2a2a2a;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,255,255,0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #00ffff;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #1e1e1e;
            color: white;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00ffff;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #00cccc;
        }

        .register {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register a {
            color: #00ffff;
            text-decoration: none;
            font-weight: bold;
        }

        .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
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
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="LOGIN">
                        <input type="reset" value="CANCEL">
                    </td>
                </tr>
            </table>
        </form>
        <div class="register">
            BUTUH DANA??? SILAHKAN REGISTER!!<br>
            <a href="register.php">REGISTER</a>
        </div>
    </div>
</body>
</html>
