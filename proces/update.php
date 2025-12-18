<?php
include "../config/database.php";

$id   = $_POST['id'];
$nama = $_POST['nama'];
$nim  = $_POST['nim'];
$buku = $_POST['buku'];
$tgl  = $_POST['tanggal_pinjam'];

$query = "UPDATE peminjaman SET
          nama='$nama',
          nim='$nim',
          buku='$buku',
          tanggal_pinjam='$tgl'
          WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: ../pages/admin/koleksiadmin.php");
