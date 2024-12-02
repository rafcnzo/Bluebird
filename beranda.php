<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>Beranda</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Montserrat", sans-serif;
    }

    .navbar {
      background-color: #305494;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .navbar-logo {
      margin-right: auto;
      width: 180px;
    }

    .navbar-greeting {
      margin-left: auto;
    }

    .logo {
      width: 180px;
    }

    .container {
      width: 60%;
      /* Lebar box */
      margin: 50px auto;
      /* Posisikan di tengah */
      text-align: center;
      border: 2px solid #005cb9;
      /* Tambahkan border */
      border-radius: 8px;
      /* Tambahkan border radius */
      padding: 20px;
      /* Beri jarak antara border dengan konten di dalamnya */
    }

    header h1 {
      margin-bottom: 30px;
    }

    .box {
      padding: 20px 0;
      /* Beri jarak pada bagian atas dan bawah konten di dalam box */
    }

    .image-links {
      display: flex;
      justify-content: space-between;
    }

    .image-links a {
      flex: 1;
      margin: 0 10px;
      text-decoration: none;
      color: #000;
    }

    .image-links img {
      width: 50%;
      border-radius: 8px;
      transition: transform 0.3s;
    }

    .image-links img:hover {
      transform: scale(1.1);
    }

    .image-links p {
      margin-top: 10px;
    }
  </style>

  <nav class="navbar">
    <div class="navbar-logo">
      <img src="../taxiafriza/gambar/bluebird.png" alt="Logo" class="logo">
    </div>
    <div class="navbar-greeting">
      Selamat datang, <span class="username">User</span>!
    </div>
  </nav>
</head>

<body>
  <div class="container">
    <header>
      <h1>Manage Table</h1>
    </header>
    <div class="box">
      <div class="image-links">
        <a href="./Driver/Driverlihat.php">
          <img src="./gambar/driver.png" alt="Image 1">
          <p>Driver</p>
        </a>
        <a href="./Booking/Bookinglihat.php">
          <img src="./gambar/booking.png" alt="Image 2">
          <p>Booking</p>
        </a>
        <a href="./Pelanggan/Pelangganlihat.php">
          <img src="./gambar/pelanggan.png" alt="Image 3">
          <p>Pelanggan</p>
        </a>
      </div>
    </div>
  </div>
</body>

</html>
