<?php
$servername = getenv('mysql.railway.internal');
$username = getenv('root');
$password = getenv('lGFtEBBSbSiCTyzaSossuciQsJtECvMt');
$dbname = getenv('railway');
$port = getenv('3306');

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
