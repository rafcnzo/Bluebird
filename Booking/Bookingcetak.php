<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            font-family: var(--font-poppins);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .form-container {
            width: 595px;
            background-color: var(--color-white);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .image-1-icon2 {
            position: absolute;
            top: 19px;
            left: 30px;
            width: 45px;
            height: 45px;
            object-fit: cover;
        }

        .gmail,
        .mybb-receipt,
        .rp {
            position: absolute;
            top: 27px;
            left: 80px;
            font-size: var(--font-size-xl);
            font-weight: 200;
            display: inline-block;
            width: 65px;
            height: 28px;
        }

        .mybb-receipt,
        .rp {
            top: 78px;
            left: 30px;
            font-size: var(--font-size-base);
            font-weight: 500;
            width: 136px;
        }

        .rp-318395 {
            top: 297px;
            left: 80px;
            font-size: var(--font-size-mid);
            font-weight: 600;
        }

        .from,
        .from1,
        .jarak3,
        .waktu-awal2,
        .waktu-tempuh3,
        .waktu-tiba2 {
            position: absolute;
            top: 470px;
            left: 109px;
            font-size: var(--font-size-xs);
            font-weight: 600;
            display: inline-block;
            width: 50px;
            height: 22px;
        }

        .from1,
        .jarak3,
        .waktu-awal2,
        .waktu-tempuh3,
        .waktu-tiba2 {
            top: 552px;
        }

        .jarak3,
        .waktu-awal2,
        .waktu-tempuh3,
        .waktu-tiba2 {
            top: 482px;
            width: 83px;
        }

        .jarak3,
        .waktu-tempuh3,
        .waktu-tiba2 {
            top: 564px;
        }

        .jarak3,
        .waktu-tempuh3 {
            top: 680px;
            left: 80px;
            width: 37px;
            height: 18px;
        }

        .waktu-tempuh3 {
            left: 174px;
            width: 106px;
        }

        .kota {
            top: 278px;
            left: 440px;
            font-size: var(--font-size-mid);
            font-weight: 600;
            width: 200px;
        }

        .kota,
        .pesan,
        .total {
            position: absolute;
            display: inline-block;
            height: 28px;
        }

        .total {
            top: 477px;
            left: 327px;
            font-size: var(--font-size-base);
            font-weight: 600;
            white-space: pre-wrap;
            width: 202px;
        }

        .pesan {
            top: 98px;
            left: 30px;
            font-weight: 300;
            width: 136px;
        }

        .alamat-awal,
        .alamat-tujuan {
            position: absolute;
            top: 128px;
            left: 28px;
            font-size: var(--font-size-2xs);
            font-weight: 300;
            display: inline-block;
            width: 199px;
            height: 59px;
        }

        .alamat-awal,
        .alamat-tujuan {
            top: 493px;
            left: 109px;
            width: 172px;
        }

        .alamat-tujuan {
            top: 575px;
        }

        .km {
            top: 693px;
            left: 80px;
            font-size: var(--font-size-2xs);
            width: 48px;
            height: 14px;
        }

        .km,
        .km1,
        .tanggal,
        .tanggalwaktu {
            position: absolute;
            font-weight: 300;
            display: inline-block;
        }

        .km1 {
            top: 695px;
            left: 174px;
            font-size: var(--font-size-2xs);
            width: 75px;
            height: 14px;
        }

        .tanggal,
        .tanggalwaktu {
            top: 126px;
            left: 485px;
            width: 129px;
            height: 19px;
        }

        .tanggalwaktu {
            top: 297px;
            left: 447px;
        }

        .transaction-detail {
            top: 356px;
            left: 362px;
            width: 118px;
        }

        .booking-id,
        .meter-fare,
        .transaction-detail {
            position: absolute;
            font-weight: 300;
            display: inline-block;
            height: 19px;
        }

        .booking-id {
            top: 375px;
            left: 362px;
            width: 155px;
        }

        .meter-fare {
            top: 404px;
        }

        .actual-fare,
        .diskon,
        .meter-fare {
            left: 327px;
            white-space: pre-wrap;
            width: 208px;
        }

        .diskon {
            position: absolute;
            top: 422px;
            font-weight: 300;
            display: inline-block;
            height: 19px;
        }

        .actual-fare {
            top: 444px;
        }

        .actual-fare,
        .driver-anda,
        .extra,
        .nama-driver3 {
            position: absolute;
            display: inline-block;
            height: 19px;
        }

        .extra {
            top: 460px;
            left: 327px;
            white-space: pre-wrap;
            width: 208px;
        }

        .driver-anda,
        .nama-driver3 {
            top: 571px;
            left: 376px;
            width: 78px;
        }

        .nama-driver3 {
            font-weight: bold;
            top: 584px;
            width: 110px;
        }

        .no-driver4,
        .email,
        .total-cost {
            position: absolute;
            top: 615px;
            left: 376px;
            display: inline-block;
            width: 200px;
            height: 19px;
            font-weight: bold;
        }

        .email,
        .total-cost {
            top: 282px;
            left: 80px;
            width: 129px;
        }

        .email {
            top: 32px;
            left: 400px;
            font-size: var(--font-size-xs);
            width: 339px;
            height: 18px;
        }

        .a4-1-child,
        .a4-1-item {
            position: absolute;
            top: 75.5px;
            left: 29.5px;
            border-top: 1px solid var(--color-gray-600);
            box-sizing: border-box;
            width: 537px;
            height: 1px;
        }

        .a4-1-item {
            top: 124.5px;
        }

        .image-2-icon2 {
            position: absolute;
            top: 204px;
            left: 70px;
            width: 100px;
            height: 60px;
            object-fit: cover;
        }

        .a4-1-child1,
        .a4-1-child2,
        .a4-1-child3,
        .a4-1-inner {
            position: absolute;
            top: 443px;
            left: 321.5px;
            border-top: 1px solid var(--color-black);
            box-sizing: border-box;
            width: 203px;
            height: 1px;
        }

        .a4-1-child1,
        .a4-1-child2,
        .a4-1-child3 {
            top: 398.5px;
        }

        .a4-1-child2,
        .a4-1-child3 {
            top: 478.5px;
        }

        .a4-1-child3 {
            top: 660.5px;
            left: 81.5px;
        }

        .image-3-icon4,
        .image-4-icon1,
        .image-5-icon {
            position: absolute;
            top: 351px;
            left: 82px;
            width: 145px;
            height: 112.4px;
            object-fit: cover;
        }

        .image-4-icon1,
        .image-5-icon {
            top: 496px;
            width: 25px;
            height: 25px;
        }

        .image-5-icon {
            top: 578px;
        }

        .a4-1 {
            width: 100%;
            position: relative;
            background-color: var(--color-white);
            height: 842px;
            overflow: hidden;
            text-align: left;
            font-size: var(--font-size-smi);
            color: var(--color-black);
            font-family: var(--font-poppins);
        }

        body {
            margin: 0;
            line-height: normal;
        }

        .popup-overlay {
            display: flex;
            flex-direction: column;
            position: fixed;
            inset: 0;
        }

        .nama-driver4 {
            top: 598px;
            left: 376px;
            width: 200px;
            position: absolute;
            font-weight: 300;
            display: inline-block;
            height: 19px;
        }

        .no-driver5 {
            top: 632px;
            left: 376px;
            width: 100px;
            position: absolute;
            font-weight: 300;
            display: inline-block;
            height: 19px;
        }

        .total-cost1 {
            position: absolute;
            display: inline-block;
            height: 19px;
            top: 300px;
            left: 80px;
            width: 129px;
        }

        :root {
            /* fonts */
            --font-sansation: Sansation;
            --font-sora: Sora;
            --font-montserrat: Montserrat;
            --font-poppins: Poppins;

            /* font sizes */
            --font-size-5xl: 24px;
            --font-size-23xl: 42px;
            --font-size-17xl: 36px;
            --font-size-xl: 20px;
            --font-size-11xl: 30px;
            --font-size-3xl: 22px;
            --font-size-9xl: 28px;
            --font-size-xs: 12px;
            --font-size-smi: 13px;
            --font-size-2xs: 11px;
            --font-size-base: 16px;
            --font-size-mid: 17px;

            /* Colors */
            --color-azure: #ebfbff;
            --color-gray-100: #fefefe;
            --color-gray-200: #868686;
            --color-gray-300: #777;
            --color-gray-600: rgba(0, 0, 0, 0.5);
            --color-gray-400: rgba(255, 255, 255, 0.25);
            --color-gray-500: rgba(141, 141, 141, 0.66);
            --color-gainsboro: #e4e4e4;
            --color-black: #000;
            --color-steelblue-100: #0b62ac;
            --color-steelblue-200: rgba(11, 98, 172, 0.96);
            --color-white: #fff;
            --color-skyblue: rgba(76, 185, 214, 0.3);
            --color-whitesmoke-100: #ececec;
            --color-whitesmoke-200: #e9e9e9;
            --color-red: #d50000;

            /* Gaps */
            --gap-9xs: 4px;

            /* Paddings */
            --padding-3xs: 10px;

            /* Border radiuses */
            --br-xl: 20px;
            --br-16xl: 35px;
            --br-10xs: 3px;
            --br-7xs: 6px;
            --br-6xs: 7px;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sansation:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" />
</head>

<?php
include '../koneksi.php';


$Id_booking = $_GET['Id_Booking'];

$query = mysqli_query($conn, "SELECT booking.Id_Booking, booking.Tanggal, booking.Jarak, booking.Alamat_asal, booking.Alamat_tujuan, booking.Kota_pemesanan, booking.Jarak, booking.Waktu_tempuh, booking.Waktu_awal, booking.Waktu_tiba, booking.Meter_fare, booking.Actual_fare, booking.Diskon, booking.Extra, driver.Nama_driver, driver.No_driver, pelanggan.id_pemesan, pelanggan.Email_pemesan, booking.Total
FROM booking 
INNER JOIN pelanggan ON booking.id_pemesan = pelanggan.id_pemesan  
INNER JOIN driver ON booking.No_driver = driver.No_driver
WHERE booking.Id_Booking = '$Id_booking'");

if (!$query) {
    die("Error: " . mysqli_error($conn));
}

if ($data = mysqli_fetch_assoc($query)) {
?>

    <body>
        <div class="form-container">
            <form>
                <div class="a4-1">
                    <img class="image-1-icon2" alt="" src="../gambar/image-1@2x.png" />

                    <div class="gmail">Gmail</div>
                    <div class="mybb-receipt">MyBB Receipt</div>
                    <div class="from">FROM</div>
                    <div class="from1">TO</div>
                    <div class="waktu-awal2"><?= $data['Waktu_awal'] ?></div>
                    <div class="waktu-tiba2"><?= $data['Waktu_tiba'] ?></div>
                    <div class="jarak3">Jarak</div>
                    <div class="waktu-tempuh3">Waktu Tempuh</div>
                    <div class="kota"><?= $data['Kota_pemesanan'] ?></div>
                    <div class="total">Total Rp. <?= $data['Total'] ?></div>
                    <div class="pesan">1 Pesan</div>
                    <div class="alamat-awal"><?= $data['Alamat_asal'] ?></div>
                    <div class="alamat-tujuan"><?= $data['Alamat_tujuan'] ?></div>
                    <div class="km"><?= $data['Jarak'] ?></div>
                    <div class="km1"><?= $data['Waktu_tempuh'] ?></div>
                    <div class="tanggal"><?= $data['Tanggal'] ?></div>
                    <div class="tanggalwaktu"><?= $data['Tanggal'] ?> <?= $data['Waktu_tiba'] ?></div>
                    <div class="transaction-detail">Transaction detail</div>
                    <div class="booking-id">Booking Id : <?= $data['Id_Booking'] ?></div>
                    <div class="meter-fare">Meter Fare Rp. <?= $data['Meter_fare'] ?></div>
                    <div class="diskon">Diskon<?= $data['Diskon'] ?></div>
                    <div class="actual-fare">Actual Fare Rp. <?= $data['Actual_fare'] ?></div>
                    <div class="extra">Extra Rp. <?= $data['Extra'] ?></div>
                    <div class="driver-anda">Driver Anda :</div>
                    <div class="nama-driver3">Nama_driver :</div>
                    <div class="nama-driver4"><?= $data['Nama_driver'] ?></div>
                    <div class="no-driver4">No_driver : </div>
                    <div class="no-driver5"><?= $data['No_driver'] ?></div>
                    <div class="total-cost">Total Cost :</div>
                    <div class="total-cost1">Rp. <?= $data['Total'] ?></div>
                    <div class="email"><?= $data['Email_pemesan'] ?></div>
                    <div class="a4-1-child"></div>
                    <div class="a4-1-item"></div>
                    <img class="image-2-icon2" alt="" src="../gambar/logo.png" />
                    <div class=" a4-1-inner">
                    </div>
                    <div class="a4-1-child1"></div>
                    <div class="a4-1-child2"></div>
                    <div class="a4-1-child3"></div>
                    <img class="image-3-icon4" alt="" src="../gambar/image-3@2x.png" />

                    <img class="image-4-icon1" alt="" src="../gambar/image-4@2x.png" />

                    <img class="image-5-icon" alt="" src="../gambar/image-4@2x.png" />
                </div>
            </form>
    </body>
<?php
}

// Tutup koneksi
mysqli_close($conn);
?>

</html>