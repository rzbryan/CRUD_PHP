<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karrent</title>
</head>
<body>
    <h1>Data Rental Mobil</h1>
    <a href="">Tambah Data</a>

    <table border = 1>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>No Plat</th>
            <th>Merek Mobil</th>
            <th>Warna</th>
            <th>Nama Penyewa</th>
            <th>Lama Sewa</th>
            <th>Action</th>
        </tr>
        <?php 
            include 'C:\xampp\htdocs\rental_mobil\CRUD_PHP\koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * FROM mobil");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['kode_sewa']; ?></td>
            <td><?php echo $d['no_mobil']; ?></td>
            <td><?php echo $d['merek_mobil']; ?></td>
            <td><?php echo $d['warna_mobil']; ?></td>
            <td><?php echo $d['nama_penyewa']; ?></td>
            <td><?php echo $d['lama_sewa']; ?></td>
            <td>
                <a href=""<?php echo $d['Kode_sewa']?>>EDIT</a>
                <a href=""<?php echo $d['Kode_sewa']?>>DELETE</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>