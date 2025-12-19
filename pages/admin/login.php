<?php 
session_start();
include '../../config/database.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="../../asets/style.css">
</head>
<body>
    <?php 
    if(isset($_POST['login'])){
        $input = $_POST['username'];
        $password = $_POST['password'];

        if(filter_var($input, FILTER_VALIDATE_EMAIL)){
            $query = "SELECT * FROM users WHERE email ='$input'";
        } else {
            $query = "SELECT * FROM users WHERE username ='$input'";
        }

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                $_SESSION['username'] = $row['username'];

                // arahke ke admin
                header("Location: koleksiadmin.php");
                exit();
            }
            else {
                echo "<p style='color: red'> Password Salah</p>";
            }
        }
        else{
            echo "<p style='color: red'> Username/email tidak sesuai</p>";
        }
    }
    ?>

<header>
    <h1>Login Admin Perpustakaan</h1>
</header>

<main>
    <section>
        <h2>Silahkan Masuk Kazeo</h2>

            <form method="post" action="">
        <label>Username atau Email</label>
        <input type="text" name="username" placeholder="Masukkan Username Email" required> 

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" required> 
        

        <button type="submit" name="login">Login</button>
    </form>
    </section>
</main>

<footer>
    <p>&copy; 2025 Perpustakaan UIN Sultan Aji Muhammad Idris Samarinda</p>
</footer>

</body>
</html>