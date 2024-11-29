<?php
// include database connection file
include '../koneksi.php';

// Get id from URL to delete that user
if (isset($_GET['No_driver'])) {
    $No_driver = $_GET['No_driver'];
}

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM driver WHERE No_driver='$No_driver'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:Driverlihat.php");
