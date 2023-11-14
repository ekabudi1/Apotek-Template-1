<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>TAMBAH PELANGGAN</h1>
        <form action="proses_add_pelanggan.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_lengkap"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input type="text" name="telp"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia"></td>
                </tr>
                <tr>
                    <td>Bukti Foto Resep</td>
                    <td><input type="file" name="buktifotoresep"></td>
                </tr>


                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data Pelanggan"></td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>