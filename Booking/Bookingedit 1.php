<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Head section -->
</head>
<body>
  <div class="popup" id="popup">
    <h2>Edit Booking</h2>
    <form>
      <label for="BookingId">ID:</label><br>
      <input type="text" id="BookingId" name="BookingId" readonly ><br>
      <label for="Tanggal">Tanggal:</label><br>
      <input type="date" id="Tanggal" name="Tanggal"><br><br>
      <label for="jarak">Jarak:</label><br>
      <input type="text" id="jarak" name="jarak"><br><br>
      <label for="Waktutempuh">Waktu tempuh:</label><br>
      <input type="text" id="Waktutempuh" name="Waktutempuh"><br><br>
      <label for="Pemesanan">Kota Pemesanan:</label><br>
      <input type="text" id="Pemesanan" name="Pemesanan" ><br>
      <label for="Awal">Alamat Awal:</label><br>
      <input type="text" id="Awal" name="Awal"><br><br>
      <label for="Tujuan">Alamat Tujuan:</label><br>
      <input type="text" id="Tujuan" name="Tujuan"><br><br>
      <label for="DriverNo">No. Driver:</label><br>
      <select id="DriverNo" name="DriverNo"></select><br><br>
      <label for="Perkilo">Harga Perkilo:</label><br>
      <input type="text" id="Perkilo" name="Perkilo" ><br>
      <label for="PemesanId">Id Pemesan:</label><br>
      <select id="PemesanId" name="PemesanId"></select><br><br>
      <label for="Meterfare">Meter fare:</label><br>
      <input type="text" id="Meterfare" name="Meterfare"><br><br>
      <label for="Actualfare">Actual fare:</label><br>
      <input type="text" id="Actualfare" name="Actualfare"><br><br>
      <label for="Diskon">Diskon:</label><br>
      <input type="text" id="Diskon" name="Diskon" ><br>
      <label for="Extra">Extra:</label><br>
      <input type="text" id="Extra" name="Extra"><br><br>
      <label for="Total">Total:</label><br>
      <input type="text" id="Total" name="Total"><br><br>
      <div class="button-container">
        <button id="saveEdit" type="button" class="save-button">Simpan</button>
        <button id="cancelEdit" type="button" class="delete-button">Batal</button>
      </div>
    </form>
  </div>
  <div class="overlay" id="overlay"></div>

  <script>
    function fetchDataAndPopulateDropdowns() {
      fetch('drivertambah.php')
        .then(response => response.text())
        .then(data => {
          const driverDropdown = document.getElementById('DriverNo');
          driverDropdown.innerHTML = data;
        })
        .catch(error => console.error('Error fetching driver data:', error));

      fetch('pelanggantambah.php')
        .then(response => response.text())
        .then(data => {
          const pelangganDropdown = document.getElementById('PemesanId');
          pelangganDropdown.innerHTML = data;
        })
        .catch(error => console.error('Error fetching pelanggan data:', error));
    }
    window.onload = fetchDataAndPopulateDropdowns;
  </script>
</body>
</html>
