<?php

include "../koneksi.php";

$namalengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];
$buktifotoresep = $_FILES['buktifotoresep']['name'];

// var_dump($buktifotoresep);

move_uploaded_file($_FILES['buktifotoresep']['tmp_name'], "../gambar/".$_FILES['buktifotoresep']['name']);

$query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES (NULL,'$namalengkap','$alamat','$telp','$usia','$buktifotoresep')");

if(!$query){
    echo "Gagal Memasukan Data Pelanggan ". mysqli_error($koneksi); //jika gagal maka akan mencetak teks dan erornya
}else{
    // header('Location:view_obat.php');
    // exit;
    echo "<script>location.href='dashboard.php?page=pelanggan';</script>"; //pindah ke halaman view pelanggan ketika berhasil
}