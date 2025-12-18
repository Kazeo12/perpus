<?php include "../../config/database.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Perpustakaan</title>
    <link rel="stylesheet" href="../../asets/style.css">
</head>
<body>

<section>
    <hr>
<h3>Daftar Peminjaman</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Buku</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM peminjaman");
while ($row = mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['buku']; ?></td>
        <td><?= $row['tanggal_pinjam']; ?></td>
        <td>
            <a href="../../proces/edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="../../proces/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>

 </section>