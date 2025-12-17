<?php
include "../config/database.php";

$nama = $_POST['nama'];
$nim  = $_POST['nim'];
$buku = $_POST['buku'];
$tgl  = $_POST['tanggal_pinjam'];

$query = "INSERT INTO peminjaman (nama, nim, buku, tanggal_pinjam)
          VALUES ('$nama', '$nim', '$buku', '$tgl')";

mysqli_query($conn, $query);

header("Location: ../pages/koleksi.php");
