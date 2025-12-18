<?php
include "../config/database.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!doctype html>
<html>
<head>
    <title>Edit Peminjaman</title>
</head>
<body>

<h2>Edit Peminjaman Buku</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required>

    <label>NIM</label>
    <input type="text" name="nim" value="<?= $row['nim']; ?>" required>

    <label>Buku</label>
    <input type="text" name="buku" value="<?= $row['buku']; ?>" required>

    <label>Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" value="<?= $row['tanggal_pinjam']; ?>" required>

    <button type="submit">Update</button>
</form>

</body>
</html>
