<center>
    <h1 class="mt-4"><b>DATA PELANGGAN</b></h1>
    <table class="table table-striped table-fluid uk-table-hover uk-table-divider" style="width: 80%;">
        <thead style="background-color: #F875AA;">
            <tr>
                <th class="judulpelanggan">ID Pelanggan</th>
                <th class="judulpelanggan">Nama Lengkap</th>
                <th class="judulpelanggan">Alamat</th>
                <th class="judulpelanggan">Telp</th>
                <th class="judulpelanggan">Usia</th>
                <th class="judulpelanggan">Bukti Foto Resep</th>
                <th class="judulpelanggan text-center" colspan="2">Aksi</th>
            </tr>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan ORDER BY idpelanggan DESC");

                while($baris = mysqli_fetch_assoc($query)){
                    // var_dump($baris);
            ?>
        </thead>
        <tbody style="font-size: 15px; background-color: #FFDFDF;">
            <tr>
                <td><?= $baris['idpelanggan'];?></td>
                <td><?= $baris['namalengkap'];?></td>
                <td><?= $baris['alamat'];?></td>
                <td><?= $baris['telp'];?></td>
                <td><?= $baris['usia'];?></td>

                <td><img src="../gambar/<?= $baris['buktifotoresep'];?>" alt="" width="100px" height="100px"></td>
                <td><a style="text-decoration: none;"
                        href="dashboard.php?page=edit_pelanggan&idpelanggan=<?= $baris['idpelanggan'];?>"
                        class="btn btn-outline-primary">edit</a></td>

                <?php
                $idpelanggan = $baris['idpelanggan'];
                $hide_delete = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_transaksi INNER JOIN tb_pelanggan USING(idpelanggan) WHERE idpelanggan = $idpelanggan");
                $cek = mysqli_fetch_row($hide_delete);
                    
                if($cek['0']==0){
                ?>
                <td><a style="text-decoration: none;"
                        href="../delete/delete_pelanggan.php?idpelanggan=<?= $baris['idpelanggan'];?>"
                        class="btn btn-outline-danger">Delete</a></td>
                <?php  
                }else{
                    echo "<td></td>";
                }
                ?>
                <?php
            }
            ?>
            </tr>
        </tbody>
    </table>

    </table>
    <a class="btn btn-outline-primary mt-4 mb-4" href="dashboard.php?page=tambah_pelanggan"
        style="text-decoration: none; font-size: 30px;">
        + Tambah Pelanggan</a>
</center>