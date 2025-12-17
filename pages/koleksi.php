<?php include "../config/database.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Perpustakaan</title>
    <link rel="stylesheet" href="../asets/style.css">
</head>
<body>

<?php
?>

<header>
    <h1>Koleksi Perpustakaan</h1>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="aturan.php">Aturan</a></li>
            <li><a href="koleksi.php">Koleksi</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<main>

    <section>
    <h2>Katalog Koleksi</h2>

    <div class="katalog">
        <div class="buku">
            <img src="../images/pemrograman.jpg" alt="Buku Pemrograman Web">
            <h3>Pemrograman Web</h3>
            <p>HTML, CSS, PHP</p>
        </div>

        <div class="buku">
            <img src="../images/basisdata.jpg" alt="Buku Basis Data">
            <h3>Basis Data</h3>
            <p>MySQL & SQL</p>
        </div>

        <div class="buku">
            <img src="../images/jurnal.jpg" alt="Buku Jurnal Ilmiah">
            <h3>Jurnal Ilmiah</h3>
            <p>Penelitian Akademik</p>
        </div>

        <div class="buku">
            <img src="../images/manajemen.jpg" alt="Buku Manajemen">
            <h3>Manajemen</h3>
            <p>Bisnis & Organisasi</p>
        </div>

        <div class="buku">
            <img src="../images/digital.jpg" alt="Buku E-Book">
            <h3>E-Book Digital</h3>
            <p>Literatur Online</p>
        </div>

        <div class="buku">
            <img src="../images/hukum.jpg" alt="Buku E-Book">
            <h3>Hukum Perdata Internasional</h3>
            <p>Keadilan</p>
        </div>

        <div class="buku">
            <img src="../images/motivasi.jpg" alt="Buku E-Book">
            <h3>Motivasi Dirimu</h3>
            <p>Perkembangan Hidup</p>
        </div>

        <div class="buku">
            <img src="../images/komunikasi.jpg" alt="Buku E-Book">
            <h3>Ilmu Komunikasi</h3>
            <p>Public Speaking</p>
        </div>

        <div class="buku">
            <img src="../images/pendidikan.jpg" alt="Buku E-Book">
            <h3>Pendidikan Dasar</h3>
            <p>Menjadi Guru Yang Baik</p>
        </div>

    </div>
</section>

    <section>
    <h2>Tambah Peminjaman Buku</h2>

<form action="../proces/tambah.php" method="POST">

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Judul Buku</label>
    <input type="text" name="buku" required>

    <label>Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" required>

    <button type="submit">Tambah Peminjaman</button>

 </section>

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
            <a href="../proces/edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="../proces/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>

 </section>
    
</main>

<footer>
    <p>&copy; 2025 Perpustakaan UIN Sultan Aji Muhammad Idris Samarinda</p>
</footer>

</body>
</html>