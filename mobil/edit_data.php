<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'C:\xampp\htdocs\rental_mobil\CRUD_PHP\koneksi.php';
        $kode_sewa = $_GET['kode_sewa'];
        $data = mysqli_query($koneksi,"select * from mobil where kode_sewa = '$kode_sewa'");
        while ($d = mysqli_fetch_array($data)){
    ?>

    <h1>EDIT DATA</h1>
    <table>
        <form action="update.php" method="POST">
            <tr>
                <td>Kode Sewa</td>
                <td>:</td>
                <td><input type="text" name = "kode_sewa" value = "<?php echo $d ['kode_sewa']?>"></td>
            </tr>
            <tr>
                <td>No Plat</td>
                <td>:</td>
                <td><input type="text" name = "no_mobil" value = "<?php echo $d ['no_mobil']?>"></td>
            </tr>
            <tr>
                <td>Merek Mobil</td>
                <td>:</td>
                <td><input type="text" name = "merek_mobil" value = "<?php echo $d ['merek_mobil']?>"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td>:</td>
                <td><input type="text" name = "warna_mobil" value = "<?php echo $d ['warna_mobil']?>"></td>
            </tr>
            <tr>
                <td>Nama Penyewa</td>
                <td>:</td>
                <td><input type="text" name = "nama_penyewa" value = "<?php echo $d ['nama_penyewa']?>"></td>
            </tr>
            <tr>
                <td>Lama Sewa</td>
                <td>:</td>
                <td><input type="text" name = "lama_sewa" value = "<?php echo $d ['lama_sewa']?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="SAVE">
                    <input type="reset" value="RESET">
                </td>
            </tr>

            <?php
	            }
	        ?>
        </form>
    </table>
</body>
</html>