<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Head section -->
</head>
<body>
  <!-- Popup untuk edit driver -->
  <div class="popup" id="popup">
    <h2>Edit Driver</h2>
    <form>
      <label for="driverNo">No. Driver:</label><br>
      <input type="text" id="driverNo" name="driverNo" readonly><br>
      <label for="driverName">Nama Driver:</label><br>
      <input type="text" id="driverName" name="driverName"><br><br>
      <div class="button-container">
        <button id="saveEdit" type="button" class="save-button">Simpan</button>
        <button id="cancelEdit" type="button" class="delete-button">Batal</button>
      </div>
    </form>
  </div>
  <div class="overlay" id="overlay"></div>
</body>
</html>
