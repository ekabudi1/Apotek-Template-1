<?php
include "../koneksi.php";
$id_pelanggan = $_GET['idpelanggan'];

$query_gambar = mysqli_query($koneksi, "SELECT buktifotoresep FROM tb_pelanggan WHERE idpelanggan=$id_pelanggan");
$baris = mysqli_fetch_assoc($query_gambar);

unlink("../gambar/".$baris['buktifotoresep']);

$query_delete = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE idpelanggan=$id_pelanggan");

if(!$query_delete){
    echo "Gagal Delete ".mysqli_error($koneksi);
}else{
    header('Location:../view/view_pelanggan.php');
}

?>