<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    td {
        font-size: 25px;
        padding-left: 15px;
        padding-top: 3%;
        font-weight: 700;
    }
    </style>
</head>

<body style="background-color: #35A29F;height: 100vh;">
    <center>
        <div class="card uk-card-hover" style="width: 50%; margin-top: 5%;">
            <div class="container" style="background-color: #739072;">
                <h1 class="mt-4">TAMBAH OBAT</h1>
            </div>
            <form action="dashboard.php?page=proses_add_obat" method="POST">
                <div class="card-body" style="background-color: #99B080;">
                    <table>
                        <tr>
                            <td>Id Supplier</td>
                            <td>
                                <select class="form-control" name="id_supplier" id="">
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
                            <td><input class="form-control" class="form-control" type="text" name="nama_obat"></td>
                        </tr>
                        <tr>
                            <td>Kategori Obat</td>
                            <td><input class="form-control" type="text" name="kategori"></td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td>
                            <td><input class="form-control" type="text" name="harga_jual"></td>
                        </tr>
                        <tr>
                            <td>Harga Beli</td>
                            <td><input class="form-control" type="text" name="harga_beli"></td>
                        </tr>
                        <tr>
                            <td>Stok Obat</td>
                            <td><input class="form-control" type="text" name="stok_obat"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input class="form-control" type="text" name="keterangan"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class=" btn-outline-success" type="submit" value="Simpan Data Obat Baru"> Simpan
                                    Data Obat Baru</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br><br>
            </form>
        </div>

    </center>