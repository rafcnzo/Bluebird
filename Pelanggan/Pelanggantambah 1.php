<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Head section -->
</head>
<body>
  <div class="popup" id="popup">
    <h2>Tambah Pelanggan</h2>
    <form>
      <label for="PemesanId">Id Pemesan:</label><br>
      <input type="number" id="PemesanId" name="PemesanId" ><br>
      <label for="driverName">Nama Pemesan:</label><br>
      <input type="text" id="driverName" name="driverName"><br><br>
      <label for="No.telp">No.telp Pemesan:</label><br>
      <input type="text" id="No.telp" name="No.telp"><br><br>
      <label for="E-mail">E-mail Pemesan:</label><br>
      <input type="text" id="E-mail" name="E-mail"><br><br>
      <div class="button-container">
        <button id="saveAdd" type="button" class="save-button">Simpan</button>
        <button id="cancelAdd" type="button" class="delete-button">Batal</button>
      </div>
    </form>
  </div>
  <div class="overlay" id="overlay"></div>
</body>
</html>
