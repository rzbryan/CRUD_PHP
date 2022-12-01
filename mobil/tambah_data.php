<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>
    <table>
        <form action="simpan.php" method="POST">
            <tr>
                <td>Kode Sewa</td>
                <td>:</td>
                <td><input type="text" name = "kode_sewa"></td>
            </tr>
            <tr>
                <td>No Plat</td>
                <td>:</td>
                <td><input type="text" name = "no_mobil"></td>
            </tr>
            <tr>
                <td>Merek Mobil</td>
                <td>:</td>
                <td><input type="text" name = "merek_mobil"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td>:</td>
                <td><input type="text" name = "warna_mobil"></td>
            </tr>
            <tr>
                <td>Nama Penyewa</td>
                <td>:</td>
                <td><input type="text" name = "nama_penyewa"></td>
            </tr>
            <tr>
                <td>Lama Sewa</td>
                <td>:</td>
                <td><input type="text" name = "lama_sewa"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="SAVE">
                    <input type="reset" value="RESET">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>