<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form.css">
    <title>add data</title>
</head>
<body>
    <form action="simpan.php" method="POST">
        <h2>TAMBAH DATA</h2>
            <label>Kode Sewa</label>
            <input type="text" name = "kode_sewa">
            
            <label>No Plat</label>
            <input type="text" name = "no_mobil">
            
            <label>Merek Mobil</label> 
            <input type="text" name = "merek_mobil">
            
            <label>Warna</label>
            <input type="text" name = "warna_mobil">
            
            <label>Nama Penyewa</label> 
            <input type="text" name = "nama_penyewa">
            
            <label>Lama Sewa</label>
            <input type="text" name = "lama_sewa">
        
            <input class="btn" type="submit" value="SAVE">
            <input class="btn1" type="reset" value="RESET">
    </form>
</body>
</html>