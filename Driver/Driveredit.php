<?php
include '../koneksi.php';
$query = mysqli_query($conn, "Select*from driver where No_driver = '$_GET[No_driver]'");
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
<form action="" method="post">
    <div class="content-header">
        <img src="../gambar/logo.png" alt="Bluebird">
    </div>
    <table>

        <tr>
            <td> Nomer </td>
            <td> <input type="text" name="No_driver" value="<?php echo $data['No_driver']; ?>" readonly> </td>
        </tr>

        <tr>
            <td> Nama </td>
            <td> <input type="text" name="Nama_driver" value="<?php echo $data['Nama_driver']; ?>"> </td>
        </tr>


        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Ubah Driver">|<a class="kembali" href="Driverlihat.php">kembali</a> </td>
        </tr>
</form>
</table>

</html>

<?php

if (isset($_POST['proses'])) {
    include '../koneksi.php';
    $No_driver = $_POST['No_driver'];
    $Nama_driver = $_POST['Nama_driver'];



    mysqli_query($conn, "update driver set 
                            Nama_driver='$Nama_driver' where No_driver='$No_driver'");
    header("location:./Driverlihat.php");
}
?>
