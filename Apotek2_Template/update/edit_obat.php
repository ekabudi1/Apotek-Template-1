<?php
include "../koneksi.php";
$id_obat = $_GET['idobat'];

$query_obat = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat=$id_obat");
$row = mysqli_fetch_assoc($query_obat);

?>
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
        <h1>EDIT OBAT</h1>
        <div class="card" style="width:50%; background-color: #98E4FF;">
            <div class="card-body">
                <form action="proses_edit_obat.php" method="POST">
                    <input type="text" hidden name="idobat" value="<?=$id_obat?>">
                    <table>
                        <tr>
                            <td>
                                <h5>Nama Perusahaan</h5>
                            </td>
                            <td>
                                <select name="id_supplier" class="form-control">
                                    <?php
                                    $id_supplier = $row['id_supplier']; //mengambil id supplier dari variabel $row di atas
                                    $query_supplier = mysqli_query($koneksi, "SELECT id_supplier, perusahaan FROM tb_supplier WHERE id_supplier=$id_supplier");
                                    $baris_supplier = mysqli_fetch_assoc($query_supplier);
        
                                    $query = "SELECT * FROM tb_supplier";
                                    $data = mysqli_query($koneksi, $query);
                                    while($baris = mysqli_fetch_assoc($data)){
                                    ?>
                                    <option
                                        <?php if($baris_supplier['id_supplier']==$baris['id_supplier']){echo "selected";} ?>
                                        value="<?= $baris['id_supplier']; ?>">
                                        <?= $baris['perusahaan'];?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Nama Obat</h5>
                            </td>
                            <td><input class="form-control" type="text" name="nama_obat" value="<?=$row['namaobat']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Kategori Obat</h5>
                            </td>
                            <td><input class="form-control" type="text" name="kategori"
                                    value="<?=$row['kategoriobat']?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Harga Jual</h5>
                            </td>
                            <td><input type="text" class="form-control" name="harga_jual"
                                    value="<?=$row['hargajual']?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Harga Beli</h5>
                            </td>
                            <td><input type="text" class="form-control" name="harga_beli"
                                    value="<?=$row['hargabeli']?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Stok Obat</h5>
                            </td>
                            <td><input type="text" class="form-control" name="stok_obat" value="<?=$row['stok_obat']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Keterangan</h5>
                            </td>
                            <td><input type="text" width="100px" class="form-control" name="keterangan"
                                    value="<?=$row['keterangan']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" value="Edit Data Obat" class="btn btn-outline-primary">
                                    <h5>SUBMIT</h5>
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>