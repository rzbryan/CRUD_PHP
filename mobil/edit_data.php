<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form.css">
    <title>edit data</title>
</head>
<body>
    <?php 
        include 'C:\xampp\htdocs\rental_mobil\CRUD_PHP\koneksi.php';
        $kode_sewa = $_GET['kode_sewa'];
        $data = mysqli_query($koneksi,"select * from mobil where kode_sewa = '$kode_sewa'");
        while ($d = mysqli_fetch_array($data)){
    ?>
        <form action="update.php" method="POST">
        <h2>EDIT DATA</h2>
            <label>Kode Sewa</label>
            <input type="text" name = "kode_sewa" value = "<?php echo $d ['kode_sewa']?>">
            
            <label>No Plat</label>
            <input type="text" name = "no_mobil" value = "<?php echo $d ['no_mobil']?>">
            
            <label>Merek Mobil</label> 
            <input type="text" name = "merek_mobil" value = "<?php echo $d ['merek_mobil']?>">
            
            <label>Warna</label>
            <input type="text" name = "warna_mobil" value = "<?php echo $d ['warna_mobil']?>">
            
            <label>Nama Penyewa</label> 
            <input type="text" name = "nama_penyewa" value = "<?php echo $d ['nama_penyewa']?>">
            
            <label>Lama Sewa</label>
            <input type="text" name = "lama_sewa" value = "<?php echo $d ['lama_sewa']?>">
          
            <input class="btn" type="submit" value="SAVE">
            <input class="btn1" type="reset" value="RESET">
            <?php
	            }
	        ?>
        </form>
</body>
</html>