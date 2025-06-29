<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// halaman read
include "koneksi.php";

// cek level user
$qlevel = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '" . $_SESSION['username'] . "'");
$dlevel = mysqli_fetch_array($qlevel);
$idlevel = $dlevel['level']; // ambil level user

// nomor urut
$query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu");
$no = 1; // Mulai nomor urut dari 1
?>

<style>
    body {
        background-color: #1e1e1e;
        color: #fff;
        font-family: sans-serif;
        padding: 20px;
    }

    a {
        color: #00ffff;
        text-decoration: none;
        font-weight: bold;
        margin-right: 10px;
    }

    a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #2c2c2c;
    }

    th, td {
        border: 1px solid #444;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #444;
        color: #00ffff;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #3a3a3a;
    }

    tr:hover {
        background-color: #555;
    }
</style>


<a href="tambah.php">Tambah Tamu</a> | <a href="logout.php">Logout</a><br><br>

<h3 style="text-align:center; color:#00ffff; margin-bottom:10px;">
    Tabel Yang Sudah Di Isi
</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>E-Mail</th>
        <th>Kepada</th>
        <th>Alamat</th>
        <th>No WA</th>
        <th>Pesan</th>
        <th>Waktu</th>
        <?php if ($idlevel == 'admin') : ?>
            <th>AKSI</th>
        <?php endif; ?>
    </tr>

    <?php while ($data = mysqli_fetch_array($query)) : ?>
        <tr>
            <td><?= $no ?></td> <!-- nomor urut -->
            <td><?= htmlspecialchars($data['nama']) ?></td>
            <td><?= htmlspecialchars($data['email']) ?></td>
            <td><?= htmlspecialchars($data['tujuan']) ?></td>
            <td><?= htmlspecialchars($data['alamat']) ?></td>
            <td><?= htmlspecialchars($data['no_wa']) ?></td>
            <td><?= htmlspecialchars($data['pesan']) ?></td>
            <td><?= $data['tanggal'] ?></td>
            <?php if ($idlevel == 'admin') : ?>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>">EDIT</a> |
                    <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin hapus data?')">HAPUS</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php
        $no++;
    endwhile; ?>
</table>
