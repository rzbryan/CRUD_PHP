<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Karrent</title>
</head>
<body>
    <div class = title>
        <h1>Data Rental Mobil</h1>
        <a class = "btn2" href="tambah_data.php">Tambah Data</a>
    </div>
    
    <table>
        <thead>
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
        </thead>
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
                <a class = "btn1" href="edit_data.php?kode_sewa=<?php echo $d['kode_sewa']?>">EDIT</a>
                <a class = "btn" href="hapus_data.php?kode_sewa=<?php echo $d['kode_sewa']?>">DELETE</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>