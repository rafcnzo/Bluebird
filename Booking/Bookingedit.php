<?php

if (isset($_POST['proses'])) {
    include '../koneksi.php';

    $Id_Booking = $_POST['Id_Booking'];
    $Tanggal = $_POST['Tanggal'];
    $Jarak = $_POST['Jarak'];
    $Waktu_tempuh = $_POST['Waktu_tempuh'];
    $Kota_pemesanan = $_POST['Kota_pemesanan'];
    $Alamat_asal = $_POST['Alamat_asal'];
    $Alamat_tujuan = $_POST['Alamat_tujuan'];
    $Waktu_awal = $_POST['Waktu_awal'];
    $Waktu_tiba = $_POST['Waktu_tiba'];
    $No_driver = $_POST['No_driver'];
    $Harga_perkilo = $_POST['Harga_perkilo'];
    $Id_pemesan = $_POST['Id_pemesan'];
    $Meter_fare = $_POST['Meter_fare'];
    $Actual_fare = $_POST['Actual_fare'];
    $Diskon = $_POST['Diskon'];
    $Extra = $_POST['Extra'];
    $Total = $_POST['Total'];


    mysqli_query($conn, "update booking set Tanggal='$Tanggal',Jarak='$Jarak',Waktu_tempuh='$Waktu_tempuh',Kota_pemesanan='$Kota_pemesanan',Alamat_asal='$Alamat_asal',Alamat_tujuan='$Alamat_tujuan',Waktu_awal='$Waktu_awal',Waktu_tiba='$Waktu_tiba',No_driver='$No_driver',
    Harga_perkilo='$Harga_perkilo',Id_pemesan='$Id_pemesan',Meter_fare='$Meter_fare',Actual_fare='$Actual_fare',Diskon='$Diskon',Extra='$Extra',Total='$Total' where Id_Booking='$Id_Booking'");
    header("location:Bookinglihat.php");
}
include '../koneksi.php';
$query = mysqli_query($conn, "Select*from booking where Id_Booking = '$_GET[Id_Booking]'");
$data = mysqli_fetch_array($query);

?>

<html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        background-image: url("../gambar/backgroundimg.jpg");
    }


    form {
        margin: 20px auto;
        /* Tambah margin atas dan bawah */
        width: 60%;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .content-header {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
    }

    .content-header img {
        height: 100px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    table th {
        padding: 10px;
        background-color: #333;
        color: #fff;
        border: 1px solid #ccc;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    input[type="text"] {
        padding: 5px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        padding: 7.5px 10px;
        background-color: #305494;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        margin-right: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #76b5c5;
        color: #333;
        transform: scale(1.05);
    }

    .edit,
    .hapus,
    .kembali {
        padding: 7.5px 10px;
        background-color: #305494;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        margin-right: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .edit:hover,
    .hapus:hover,
    .kembali:hover {
        background-color: #76b5c5;
        color: #333;
        transform: scale(1.05);
    }

    .edit {
        margin-right: 5px;
    }

    .kembali {
        margin-top: 1px;
    }

    .kembali:hover {
        background-color: #f2f2f2;
        color: #333;
    }
</style>
<script>
    function updateActualFare() {
        var meterFare = parseFloat(document.getElementsByName('Meter_fare')[0].value) || 0;
        document.getElementsByName('Actual_fare')[0].value = meterFare;
        updateTotal();
    }

    function updateTotal() {
        var actualFare = parseFloat(document.getElementsByName('Actual_fare')[0].value) || 0;
        var extra = parseFloat(document.getElementsByName('Extra')[0].value) || 0;
        var discount = parseFloat(document.getElementsByName('Diskon')[0].value) || 0;
        var total = actualFare + extra - discount;

        // Format total to Indonesian Rupiah
        var formattedTotal = formatRupiah(total);
        document.getElementsByName('Total')[0].value = formattedTotal;
    }

    // Function to format number to Indonesian Rupiah
    function formatRupiah(angka) {
        var reverse = angka.toString().split('').reverse().join('');
        var ribuan = reverse.match(/\d{1,3}/g);
        var formatted = ribuan.join('.').split('').reverse().join('');
        return 'Rp ' + formatted;
    }
</script>
<form action="" method="post">
    <div class="content-header">
        <img src="../gambar/logo.png" alt="Bluebird">
    </div>
    <table>
        <h4>FORM UBAH BOOKING</h4>
        <tr>
            <td> ID </td>
            <td> <input type="text" name="Id_Booking" value="<?php echo $data['Id_Booking']; ?>" readonly> </td>
        </tr>

        <tr>
            <td> Tanggal </td>
            <td> <input type="date" name="Tanggal" value="<?php echo $data['Tanggal']; ?>"> </td>
        </tr>

        <tr>
            <td> Jarak </td>
            <td> <input type="text" name="Jarak" value="<?php echo $data['Jarak']; ?>"> </td>
        </tr>

        <tr>
            <td> Waktu Tempuh </td>
            <td> <input type="text" name="Waktu_tempuh" value="<?php echo $data['Waktu_tempuh']; ?>"> </td>
        </tr>

        <tr>
            <td> Kota Pemesanan </td>
            <td> <input type="text" name="Kota_pemesanan" value="<?php echo $data['Kota_pemesanan']; ?>"> </td>
        </tr>

        <tr>
            <td> Alamat Asal </td>
            <td> <input type="text" name="Alamat_asal" value="<?php echo $data['Alamat_asal']; ?>"> </td>
        </tr>

        <tr>
            <td> Alamat Tujuan </td>
            <td> <input type="text" name="Alamat_tujuan" value="<?php echo $data['Alamat_tujuan']; ?>"> </td>
        </tr>

        <tr>
            <td> Waktu Awal </td>
            <td> <input type="time" name="Waktu_awal" value="<?php echo $data['Waktu_awal']; ?>"> </td>
        </tr>

        <tr>
            <td> Waktu Tiba </td>
            <td> <input type="time" name="Waktu_tiba" value="<?php echo $data['Waktu_tiba']; ?>"> </td>
        </tr>


        <tr>
            <td>
                Driver
            <td><select name="No_driver" style="width:170px;">
                    <?php
                    include '../koneksi.php';
                    $ambildriver = mysqli_query($conn, "SELECT * FROM driver");
                    while ($driver = mysqli_fetch_array($ambildriver)) {
                        $selected = ($data['No_driver'] == $driver['No_driver']) ? 'selected' : '';
                        echo "<option value='$driver[No_driver]' $selected>$driver[Nama_driver]</option>";
                    }
                    ?></td>
            </select>
            </td>
        </tr>

        <tr>
            <td> Harga Perkilo </td>
            <td> <input type="text" name="Harga_perkilo" value="<?php echo $data['Harga_perkilo']; ?>"> </td>
        </tr>

        <tr>
            <td>
                Id Pelanggan
            <td><select name="Id_pemesan" style="width:170px;">
                    <?php
                    include '../koneksi.php';
                    $ambilpelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
                    while ($pelanggan = mysqli_fetch_array($ambilpelanggan)) {
                        $selected = ($data['Id_pemesan'] == $pelanggan['Id_pemesan']) ? 'selected' : '';
                        echo "<option value='$pelanggan[Id_pemesan]' $selected>$pelanggan[Nama_pemesan]</option>";
                    }
                    ?></td>
            </select>
            </td>
        </tr>

        <tr>
            <td> Meter Fare </td>
            <td> <input type="text" name="Meter_fare" value="<?php echo $data['Meter_fare']; ?>" oninput="updateActualFare()"> </td>
        </tr>

        <tr>
            <td> Actual Fare </td>
            <td> <input type="text" name="Actual_fare" value="<?php echo $data['Actual_fare']; ?>"> </td>
        </tr>

        <tr>
            <td> Diskon </td>
            <td> <input type="text" name="Diskon" value="<?php echo $data['Diskon']; ?>" oninput="updateTotal()"> </td>
        </tr>

        <tr>
            <td> Extra </td>
            <td> <input type="text" name="Extra" value="<?php echo $data['Extra']; ?>" oninput="updateTotal()"> </td>
        </tr>

        <tr>
            <td> Total </td>
            <td> <input type="text" name="Total" value="<?php echo $data['Total']; ?>"> </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Ubah Booking"><a class="kembali" href="./Bookinglihat.php">Kembali</a> </td>
        </tr>
    </table>
</form>

</html>
