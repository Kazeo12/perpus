<?php include "../../config/database.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Perpustakaan</title>
    <link rel="stylesheet" href="../../asets/style.css">
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
            padding: 30px;
        }

        section {
            background: #ffffff;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
            max-width: 1000px;
            margin: auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333ff;
            font-size: 22px;
        }

        hr {
            border: none;
            height: 3px;
            width: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0 auto 15px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
        }

        table th {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            padding: 12px;
            font-size: 14px;
        }

        table td {
            padding: 12px;
            font-size: 14px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        table tr:nth-child(even) {
            background: #f9f9ff;
        }

        table tr:hover {
            background: #eef1ff;
            transition: 0.2s;
        }

        .aksi a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
        }

        .edit {
            background: #4caf50;
            color: #fff;
        }

        .hapus {
            background: #e53935;
            color: #fff;
        }

        .aksi a:hover {
            opacity: 0.85;
        }

        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }

            h3 {
                font-size: 18px;
            }
        }
    </style>

<body>
<section>
    <hr>
    <h3>Daftar Peminjaman</h3>

    <table>
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
            <td class="aksi">
                <a class="edit" href="../../proces/edit.php?id=<?= $row['id']; ?>">Edit</a>
                <a class="hapus" href="../../proces/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</section>

</body>
</html>
