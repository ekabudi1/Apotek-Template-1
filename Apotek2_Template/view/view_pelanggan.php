<center>
    <h1 class="mt-4"><b>DATA PELANGGAN</b></h1>
    <table class="mt-4" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Usia</th>
            <th>Bukti Foto Resep</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan ORDER BY idpelanggan DESC");

                while($baris = mysqli_fetch_assoc($query)){
                    // var_dump($baris);
            ?>
        <tr>
            <td><?= $baris['idpelanggan'];?></td>
            <td><?= $baris['namalengkap'];?></td>
            <td><?= $baris['alamat'];?></td>
            <td><?= $baris['telp'];?></td>
            <td><?= $baris['usia'];?></td>

            <td><img src="../gambar/<?= $baris['buktifotoresep'];?>" alt="" width="100px" height="100px"></td>
            <td><a href="../update/edit_pelanggan.php?idpelanggan=<?= $baris['idpelanggan'];?>">edit</a></td>

            <?php
                $idpelanggan = $baris['idpelanggan'];
                $hide_delete = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_transaksi INNER JOIN tb_pelanggan USING(idpelanggan) WHERE idpelanggan = $idpelanggan");
                $cek = mysqli_fetch_row($hide_delete);
                    
                if($cek['0']==0){
                ?>
            <td><a href="../delete/delete_pelanggan.php?idpelanggan=<?= $baris['idpelanggan'];?>">Delete</a></td>
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
    <a class="btn btn-outline-primary mt-4" href="../add/add_pelanggan.php" style="text-decoration: none;"> tambah
        obat</a>
</center>