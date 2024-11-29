<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            background-image: url("../gambar/backgroundimg.jpg");
            background-size: cover;
            background-position: center;
        }

        header {
            background-color: #305494;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        header img {
            height: 90px;
            margin-right: 20px;
        }

        nav {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            padding-left: 30%;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 40px;
            font-size: 22px;
            position: relative;
            transition: color 0.3s;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: #fff;
            transition: width 0.3s ease;
            transition-delay: 0.1s;
        }

        nav a:hover {
            color: #76b5c5;
        }

        nav a:hover::after {
            width: 100%;
            left: 0;
            background: #76b5c5;
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

        .content-header h4 {
            text-align: center;
            color: #305494;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .content-actions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .content-actions a {
            padding: 7.5px 10px;
            background-color: #305494;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .content-actions a:hover {
            background-color: #76b5c5;
            color: #333;
            transform: scale(1.05);
        }

        form {
            margin: 20px auto;
            width: 100%;
            max-width: 1350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table td {
            padding: 20px;
            width: max-content;
            border: 1px solid #ccc;
        }

        table td.aksi,
        table td.keterangan {
            padding: 10px;
        }


        table th {
            padding: 10px;
            background-color: #305494;
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
            padding: 8px 20px;
            background-color: #305494;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #ffcc00;
            transform: scale(1.05);
        }

        .edit,
        .hapus,
        .cetak {
            padding: 7.5px 10px;
            background-color: #305494;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .edit:hover,
        .hapus:hover,
        .cetak:hover {
            background-color: #76b5c5;
            transform: scale(1.05);
        }

        .edit {
            margin-right: 5px;
        }

        .aksi {
            width: 30%;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
            margin-right: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .pagination a:hover {
            background-color: #ffcc00;
            transform: scale(1.05);
        }

        .pagination a.current {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <img src="../gambar/bluebird.png" alt="Logo">
        <nav>
            <a href="../Driver/Driverlihat.php">Driver</a>
            <a href="../Pelanggan/Pelangganlihat.php">Pelanggan</a>
            <a href="bookinglihat.php">Booking</a>
            <a href="../beranda.php">Keluar</a>
        </nav>
    </header>

    <form>
        <div class="content-header">
            <img src="../gambar/logo.png" alt="Bluebird">
        </div>
        <h4 style="text-align: center; color: #305494; font-size : 20px;">TABEL BOOKING</h4>

        <div class="content-actions">
            <a href="Bookingtambah.php">Tambah Booking</a>
            <a href="../beranda.php">Kembali</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Jarak</th>
                <th>Alamat Awal</th>
                <th>Alamat Tujuan</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
            <?php
            include '../koneksi.php';
            $limit = 10;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;

            $query = mysqli_query($conn, "SELECT booking.Id_Booking,booking.Tanggal,booking.Jarak,booking.Alamat_asal,booking.Alamat_tujuan,
            driver.No_driver,pelanggan.id_pemesan,booking.Total
            FROM booking INNER JOIN pelanggan ON booking.id_pemesan = pelanggan.id_pemesan  INNER JOIN driver ON booking.No_driver = driver.No_driver LIMIT $start, $limit");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['Id_Booking']; ?></td>
                    <td><?php echo $data['Tanggal']; ?></td>
                    <td><?php echo $data['Jarak']; ?></td>
                    <td><?php echo $data['Alamat_asal']; ?></td>
                    <td><?php echo $data['Alamat_tujuan']; ?></td>
                    <td><?php echo $data['Total']; ?></td>
                    <td class="aksi">
                        <a class="edit" href="Bookingedit.php?Id_Booking=<?php echo $data['Id_Booking']; ?>">Edit</a> |
                        <a class="hapus" href="Bookinghapus.php?Id_Booking=<?php echo $data['Id_Booking']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a> |
                        <a class="cetak" href="Bookingcetak.php?Id_Booking=<?php echo $data['Id_Booking']; ?>">Cetak</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <div class="pagination">
            <?php
            if ($page > 1) {
                echo '<a href="?page=' . ($page - 1) . '">Back</a>';
            }
            $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM booking")) / $limit);

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    echo '<a href="?page=' . $i . '" class="current">' . $i . '</a>';
                } else {
                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }
            }
            if ($page < $total_pages) {
                echo '<a href="?page=' . ($page + 1) . '">Next</a>';
            }
            ?>
        </div>
    </form>
</body>

</html>