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
      background-image: url("../gambar/backgroundimg.jpg");
    }

    .navbar {
      max-width: 100%; /* Lebar maksimum */
      height: 20%; /* Tinggi navbar */
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #305494;
      padding: 0 20px; /* Padding kanan dan kiri */
      box-sizing: border-box; /* Biar padding tidak menambah lebar */
      margin: auto;
      color: #fff;
    }

    .navbar img {
      width: 180px; /* Tinggi gambar disesuaikan */
    }

    .logout-link {
      color: white;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 5px;
      background-color: transparent;
      border: 1px solid white;
    }

    .logout-link:hover {
      background-color: white;
      color: #305494;
    }

    .navbar-links {
      display: flex;
      justify-content: space-around;
      width: 50%;
      padding-left: 150px; /* Tambahkan padding kiri */
    }

    .navbar-links a {
      text-decoration: none;
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .navbar-links a:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .container {
      max-width: 80%;
      margin: 0 auto;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .action-buttons {
      display: flex;
      justify-content: center;
      border-radius: 5px;
    }

    .action-buttons button {
      padding: 5px 10px;
      margin-right: 5px;
      cursor: pointer;
    }

    .edit-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
    }

    .edit-button:hover {
      background-color: #0056b3;
    }

    .delete-button {
      background-color: #dc3545;
      color: #fff;
      border: none;
      border-radius: 3px;
    }

    .delete-button:hover {
      background-color: #bd2130;
    }

    .add-button {
      background-color: #28a745;
      margin-bottom: 30px;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .add-button:hover {
      background-color: #218838;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 2px solid #005cb9;
      border-radius: 8px;
      z-index: 9999;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9998;
    }

    /* Style untuk tombol-tombol */
    .button-container {
      text-align: center;
    }

    .button-container button {
      margin: 10px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .save-button {
      background-color: #28a745;
      color: #fff;
    }

    .delete-button {
      background-color: #dc3545;
      color: #fff;
    }

  </style>
</head>
<body>
  <header class="navbar">
    <a href="../beranda.php">
      <img src="../gambar/bluebird.png" alt="Logo">
    </a>
    <div class="navbar-links">
      <a href="../Driver/Driverlihat.php">Driver</a>
      <a href="../Pelanggan/Pelangganlihat.php">Pelanggan</a>
      <a href="../Booking/Bookinglihat.php">Booking</a>
      <a>Tentang kami</a>
    </div>
    <a href="../index.php" class="logout-link">Logout</a>
  </header>
  <div class="container">
    <div id="popupContainer"></div>
    <button id="openAddPopup" class="add-button">Tambah</button>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>No.telp</th>
          <th>E-mail</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="action-buttons">
            <button id="edit-001" class="edit-button" onclick="openEditPopup('001')">Edit</button>
            <button class="delete-button">Hapus</button>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="action-buttons">
            <button id="edit-002" class="edit-button" onclick="openEditPopup('002')">Edit</button>
            <button class="delete-button">Hapus</button>
          </td>
        </tr>
        <!-- Tambahkan baris lainnya sesuai dengan data driver -->
      </tbody>
    </table>
  </div>
</body>

<script>
  function loadAddPopup() {
      fetch('Pelanggantambah.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('popupContainer').innerHTML = data;
          // Memanggil fungsi untuk membuka pop-up tambah
          document.getElementById('openAddPopup').addEventListener('click', function(){
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
          });

          // Memanggil fungsi untuk menutup pop-up tambah saat tombol batal ditekan
          document.getElementById('cancelAdd').addEventListener('click', function(){
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
          });

          // Memanggil fungsi untuk menyimpan data saat tombol simpan ditekan
          document.getElementById('saveAdd').addEventListener('click', function(){
            // Fungsi untuk menyimpan data ke database
            // Lakukan operasi penyimpanan data ke database di sini
            console.log('Data telah disimpan');
            // Menutup overlay setelah data disimpan
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
          });
        })
        .catch(error => console.error(error));
    }

    // Fungsi untuk membuka pop-up edit
    function openEditPopup() {
    fetch('Pelangganedit.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('popupContainer').innerHTML = data;
      // Mengisi nilai No. Driver pada pop-up edit
      document.getElementById('PemesanId').value = PemesanId;
      // Memunculkan pop-up edit
      document.getElementById('popup').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';

      // Memanggil fungsi untuk menutup pop-up edit saat tombol batal ditekan
      document.getElementById('cancelEdit').addEventListener('click', function(){
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
      });

      // Memanggil fungsi untuk menyimpan data saat tombol simpan ditekan
      document.getElementById('saveEdit').addEventListener('click', function(){
        // Fungsi untuk menyimpan data ke database
        // Lakukan operasi penyimpanan data ke database di sini
        console.log('Data telah diperbarui');
        // Menutup overlay setelah data disimpan
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
      });
    })
    .catch(error => console.error(error));
}

    // Memanggil fungsi untuk memuat pop-up tambah saat halaman dimuat
    loadAddPopup();
</script>

</html>
