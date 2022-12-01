<?php

    include 'C:\xampp\htdocs\rental_mobil\CRUD_PHP\koneksi.php';
    $kode_sewa = $_GET ['kode_sewa'];
    mysqli_query($koneksi, "delete from mobil where kode_sewa = '$kode_sewa'");

    header ("location:index.php")

?>