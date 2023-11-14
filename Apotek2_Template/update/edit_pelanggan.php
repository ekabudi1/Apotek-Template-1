<?php
include "../koneksi.php";
$id_pelanggan = $_GET['idpelanggan'];

$query_pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE idpelanggan=$id_pelanggan");
$row = mysqli_fetch_assoc($query_pelanggan);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>EDIT PELANGGAN</h1>
        <form action="proses_edit_pelanggan.php" method="POST" enctype="multipart/form-data">
            <input type="text" hidden name="idpelanggan" value="<?=$id_pelanggan?>">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_lengkap" value="<?=$row['namalengkap']?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?=$row['alamat']?>"></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input type="text" name="telp" value="<?=$row['telp']?>"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia" value="<?=$row['usia']?>"></td>
                </tr>
                <tr>
                    <td>Bukti Foto Resep</td>
                    <td><img src="../gambar/<?=$row['buktifotoresep']?>" alt="" width="100px" height="100px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="file" name="buktifotoresep" value="<?=$row['buktifotoresep']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Edit Data Pelanggan"></td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>