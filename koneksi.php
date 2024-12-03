<?php
$host = getenv('junction.proxy.rlwy.net');
$username = getenv('root');
$password = getenv('lGFtEBBSbSiCTyzaSossuciQsJtECvMt');
$dbname = getenv('railway');
$port = getenv(32607);

var_dump($servername, $username, $password, $dbname, $port);

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
