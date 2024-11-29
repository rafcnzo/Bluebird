<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Head section -->
</head>
<body>
  <!-- Popup untuk tambah driver -->
  <div class="popup" id="popup">
    <h2>Tambah Driver</h2>
    <form>
      <label for="driverNo">No. Driver:</label><br>
      <input type="text" id="driverNo" name="driverNo"><br>
      <label for="driverName">Nama Driver:</label><br>
      <input type="text" id="driverName" name="driverName"><br><br>
      <div class="button-container">
        <button id="saveAdd" type="button" class="save-button">Simpan</button>
        <button id="cancelAdd" type="button" class="delete-button">Batal</button>
      </div>
    </form>
  </div>
  <div class="overlay" id="overlay"></div>
</body>
</html>
