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

<a href="tambah.php">Tambah Tamu</a> | <a href="logout.php">Logout</a><br><br>

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
