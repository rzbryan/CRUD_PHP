<?php
    $koneksi = mysqli_connect("loalhost","root","","db_rental_mobil");
    if (mysqli_connect_errno()){

        echo "Koneksi Gagal".mysqli_connect_error();

    }
?>