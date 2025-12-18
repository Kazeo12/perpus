<?php 
include 'config/database.php';

$username = "admin";
$email = "admin@admin.com";
$password = password_hash("12345", PASSWORD_DEFAULT);
$nama_lengkap = "Administrator";

$query = "
            INSERT INTO users (username, email, password, nama_lengkap)
            VALUES ('$username', '$email', '$password', '$nama_lengkap')
        ";

if(mysqli_query($conn, $query)){
    echo "Akun admin telah tersedia";
} else {
    echo "Gagal membuat akun ". mysqli_error($conn);
}

?>