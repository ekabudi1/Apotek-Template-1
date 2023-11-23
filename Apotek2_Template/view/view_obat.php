<center>
    <h1><b>VIEW OBAT !</b></h1>
    <div class="container-fluid">
        <table class="table table-striped table-fluid  table-hover table-bordered ">
            <thead>

                <tr>
                    <th>Id Obat</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Obat</th>
                    <th>Kategori Obat</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th class=>Stok Obat</th>
                    <th>Keterangan</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tb_obat INNER JOIN tb_supplier USING(id_supplier) ORDER BY id_obat DESC");

                    while($baris = mysqli_fetch_assoc($query)){
                        // var_dump($baris);
                ?>
            <tr class="bg-success bg-gradient">
                <td><?= $baris['id_obat'];?></td>
                <td><?= $baris['perusahaan'];?></td>
                <td><?= $baris['namaobat'];?></td>
                <td><?= $baris['kategoriobat'];?></td>
                <td><?= $baris['hargajual'];?></td>
                <td><?= $baris['hargabeli'];?></td>
                <td><?= $baris['stok_obat'];?></td>
                <td><?= $baris['keterangan'];?></td>
                <td><a style="text-decoration: none;"
                        href="dashboard.php?page=edit_obat&idobat=<?= $baris['id_obat'];?>"
                        class="btn btn-outline-primary">edit</a></td>

                <?php
                    $idobat = $baris['id_obat'];
                    $hide_delete = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_obat INNER JOIN tb_detail_transaksi ON tb_obat.id_obat = tb_detail_transaksi.idobat WHERE tb_obat.id_obat = $idobat");
                    $cek = mysqli_fetch_row($hide_delete);
                        
                    if($cek['0']==0){
                    ?>
                <td><a style="text-decoration: none;" href="../delete/delete_obat.php?idobat=<?= $baris['id_obat'];?>"
                        class="btn btn-outline-danger">Delete</a></td>
                <?php  
                    }else{
                        echo "<td></td>";
                    }
                    ?>


            </tr>
            <?php
                }
                ?>
        </table>

    </div>
    <a class="btn btn-outline-primary" style="text-decoration: none;font-size: 30px;"
        href="dashboard.php?page=tambah_obat"> +
        tambah obat</a>
</center>