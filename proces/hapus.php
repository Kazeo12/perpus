<?php
include "../config/database.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM peminjaman WHERE id='$id'");

header("Location: ../pages/koleksi.php");
