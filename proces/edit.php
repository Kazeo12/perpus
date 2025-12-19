<?php
include "../config/database.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Peminjaman</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #141a07, #00c6ff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #ffffff;
            width: 420px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form label {
            display: block;
            margin-top: 12px;
            font-size: 14px;
            color: #555;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        form input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 2px rgba(102,126,234,0.2);
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        @media (max-width: 480px) {
            .card {
                width: 90%;
            }
        }
    </style>
</head>

<body>

<div class="card">
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

        <button type="submit">Update Data</button>
    </form>
</div>

</body>
</html>

