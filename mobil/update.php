<?php

    include 'C:\xampp\htdocs\rental_mobil\CRUD_PHP\koneksi.php';
    $kode_sewa = $_POST['kode_sewa'];
    $no_mobil = $_POST['no_mobil'];
    $merek_mobil = $_POST['merek_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $lama_sewa = $_POST['lama_sewa'];

    mysqli_query($koneksi,"update mobil set no_mobil='$no_mobil', merek_mobil='$merek_mobil', warna_mobil='$warna_mobil',
    nama_penyewa='$nama_penyewa', lama_sewa='$lama_sewa' where kode_sewa = '$kode_Sewa'");

    header("location:index.php")

?>