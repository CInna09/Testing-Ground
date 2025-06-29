<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Tamu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: sans-serif;
            background-color: #1e1e1e;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            background-color: #111;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 10px rgba(255,255,255,0.1);
        }

        .form-box h2 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .form-box label {
            color: white;
        }

        .form-box input,
        .form-box textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            background-color: #222;
            color: white;
            border: 1px solid #555;
            border-radius: 5px;
        }

        .form-box button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }

        .form-box button[type="reset"] {
            background-color: #007BFF;
        }
    </style>
</head>
<body>

    <div class="form-box">
        <h2>MASUKKAN DATA TAMU</h2>
        <form action="tambah_action.php" method="POST">
            <label>Alamat</label>
            <input type="text" name="alamat" required>

            <label>No WA</label>
            <input type="text" name="no_wa" required>

            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>E-Mail</label>
            <input type="email" name="email" required>

            <label>Kepada</label>
            <input type="text" name="kepada" required>

            <label>Pesan</label>
            <textarea name="pesan" rows="3" required></textarea>

            <button type="submit">SIMPAN</button>
            <button type="reset">BATAL</button>
        </form>
    </div>

</body>
</html>
