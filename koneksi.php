<?php
// Fetching environment variables
$host = getenv('DB_HOST'); 
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');
$port = getenv('DB_PORT');

// Debugging (Only use in development)
// var_dump($host, $username, $password, $dbname, $port);

// Creating connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful!";
?>
