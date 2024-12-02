<?php
$servername = getenv('');
$username = getenv('');
$password = getenv('');
$dbname = getenv('');
$port = getenv('');

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
