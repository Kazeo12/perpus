<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="../asets/style.css">
</head>
<body>

<?php
?>

<header>
    <h1>Login Perpustakaan</h1>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="aturan.php">Aturan</a></li>
            <li><a href="koleksi.php">Koleksi</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Silakan Masuk</h2>

        <form action="login_process.php" method="post">
            <div>
                <label for="username">NIM:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Masuk</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2025 Perpustakaan UIN Sultan Aji Muhammad Idris Samarinda</p>
</footer>

</body>
</html>
