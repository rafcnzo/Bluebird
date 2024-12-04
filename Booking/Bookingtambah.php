<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Calculation</title>
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
            document.getElementsByName('Total')[0].value = total;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url("../gambar/backgroundimg.jpg");
        }

        form {
            margin: 20px auto;
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
</head>

<body>
    <form action="" method="post">
        <div class="content-header">
            <img src="../gambar/logo.png" alt="Bluebird">
        </div>
        <table>
            <h4>FORM BOOKING</h4>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_Booking"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="Tanggal"></td>
            </tr>
            <tr>
                <td>Jarak</td>
                <td><input type="text" name="Jarak"></td>
            </tr>
            <tr>
                <td>Waktu Tempuh</td>
                <td><input type="text" name="Waktu_tempuh"></td>
            </tr>
            <tr>
                <td>Kota Pemesanan</td>
                <td><input type="text" name="Kota_pemesanan"></td>
            </tr>
            <tr>
                <td>Alamat Asal</td>
                <td><input type="text" name="Alamat_asal"></td>
            </tr>
            <tr>
                <td>Alamat Tujuan</td>
                <td><input type="text" name="Alamat_tujuan"></td>
            </tr>
            <tr>
                <td>Waktu Awal</td>
                <td><input type="time" name="Waktu_awal"></td>
            </tr>
            <tr>
                <td>Waktu Tiba</td>
                <td><input type="time" name="Waktu_tiba"></td>
            </tr>
            <tr>
                <td>Driver</td>
                <td>
                    <select name="No_driver" style="width:170px;">
                        <option value="">--Pilih--</option>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM driver");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $data['No_driver']; ?>">
                                <?php echo $data['Nama_driver']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Perkilo</td>
                <td><input type="text" name="Harga_perkilo"></td>
            </tr>
            <tr>
                <td>Pelanggan</td>
                <td>
                    <select name="Id_pemesan" style="width:170px;">
                        <option value="">--Pilih--</option>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM pelanggan");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $data['Id_pemesan']; ?>">
                                <?php echo $data['Nama_pemesan']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Meter Fare</td>
                <td><input type="text" name="Meter_fare" oninput="updateActualFare()"></td>
            </tr>
            <tr>
                <td>Actual Fare</td>
                <td><input type="text" name="Actual_fare" readonly></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td><input type="text" name="Diskon" value="0" oninput="updateTotal()"></td>
            </tr>
            <tr>
                <td>Extra</td>
                <td><input type="text" name="Extra" value="0" oninput="updateTotal()"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="text" name="Total" readonly></td>
            </tr>
            <tr>
                <td><a class="kembali" href="Bookinglihat.php">Kembali</a></td>
                <td><input type="submit" name="proses" value="Simpan Booking"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['proses'])) {
    include '../koneksi.php';

    $id_Booking = $_POST['id_Booking'];
    $Tanggal = $_POST['Tanggal'];
    $Jarak = $_POST['Jarak'];
    $Waktu_tempuh = $_POST['Waktu_tempuh'];
    $Kota_pemesanan = $_POST['Kota_pemesanan'];
    $Alamat_asal = $_POST['Alamat_asal'];
    $Alamat_Tujuan = $_POST['Alamat_tujuan'];
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

    $sql = "INSERT INTO booking 
            (id_Booking, Tanggal, Jarak, Waktu_tempuh, Kota_pemesanan, Alamat_asal, Alamat_Tujuan, Waktu_awal, Waktu_tiba, No_driver, Harga_perkilo, Id_pemesan, Meter_fare, Actual_fare, Diskon, Extra, Total) 
            VALUES ('$id_Booking', '$Tanggal', '$Jarak', '$Waktu_tempuh', '$Kota_pemesanan', '$Alamat_asal', '$Alamat_Tujuan', '$Waktu_awal', '$Waktu_tiba', '$No_driver', '$Harga_perkilo', '$Id_pemesan', '$Meter_fare', '$Actual_fare', '$Diskon', '$Extra', '$Total')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location.href = './Bookinglihat.php?id_Booking=" . $id_Booking . "';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
