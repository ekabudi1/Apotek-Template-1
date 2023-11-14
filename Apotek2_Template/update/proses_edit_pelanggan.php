<?php
include "../koneksi.php";

$idpelanggan = $_POST['idpelanggan'];
$namalengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];
$buktifotoresep = $_FILES['buktifotoresep']['name'];

move_uploaded_file($_FILES['buktifotoresep']['tmp_name'], "../gambar/".$_FILES['buktifotoresep']['name']);

$query = mysqli_query($koneksi, "UPDATE tb_pelanggan SET namalengkap='$namalengkap', alamat='$alamat', telp='$telp', usia='$usia', buktifotoresep='$buktifotoresep' WHERE idpelanggan='$idpelanggan'");

if(!$query){
    echo "Gagal Mengedit Data Pelanggan ". mysqli_error($koneksi);
}else{
    echo "<script>location.href='../view/view_pelanggan.php';</script>";
}