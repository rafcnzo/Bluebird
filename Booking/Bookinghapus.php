<?php
// include database connection file
include '../koneksi.php';

// Get id from URL to delete that user
if (isset($_GET['Id_Booking'])) {
    $Id_Booking = $_GET['Id_Booking'];
}

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM booking WHERE Id_Booking='$Id_Booking'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:Bookinglihat.php");
