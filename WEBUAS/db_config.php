<?php
$host = "localhost";
$username = "root";
$password = "#12345";
$db = "meikouas";  // Nama database diubah menjadi klug

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>