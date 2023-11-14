<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <center>
        <h1>TAMBAH OBAT</h1>
        <form action="proses_add_obat.php" method="POST">
            <table>
                <tr>
                    <td>Id Supplier</td>
                    <td>
                        <select name="id_supplier" id="">
                            <?php
                            include "../koneksi.php";
                            $query = "SELECT * FROM tb_supplier";
                            $data = mysqli_query($koneksi, $query);
                            while($baris = mysqli_fetch_assoc($data)){
                            ?>
                            <option value="<?= $baris['id_supplier']; ?>"><?= $baris['perusahaan'];?></option>
                            <?php
                            }

                            var_dump($baris);
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Obat</td>
                    <td><input type="text" name="nama_obat"></td>
                </tr>
                <tr>
                    <td>Kategori Obat</td>
                    <td><input type="text" name="kategori"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="text" name="harga_jual"></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="harga_beli"></td>
                </tr>
                <tr>
                    <td>Stok Obat</td>
                    <td><input type="text" name="stok_obat"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data Obat"></td>
                </tr>
            </table>
        </form>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>