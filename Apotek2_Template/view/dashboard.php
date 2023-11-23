<!-- berfungsi untuk menampung semua template -->
<?php 
include_once "../template/header.php";
include_once "../template/navbar.php";

switch ($_GET['page']) {
    //Obat
    case "obat":
        include_once "view_obat.php";
     break;
    case "tambah_obat":
        include_once "../add/add_obat.php";
     break;
    case "proses_add_obat":
        include_once "../add/proses_add_obat.php";
     break;
    case "edit_obat":
        include_once "../update/edit_obat.php";
     break;
    case "proses_edit_obat":
        include_once "../update/proses_edit_obat.php";
     break;

    // Pelanggan
    case "pelanggan":
        include_once "view_pelanggan.php";
     break;
    case "tambah_pelanggan":
        include_once "../add/add_pelanggan.php";
     break;
    case "proses_add_pelanggan":
        include_once "../add/proses_add_pelanggan.php";
     break;
    case "edit_pelanggan":
        include_once "../update/edit_pelanggan.php";
     break;
    case "proses_edit_pelanggan":
        include_once "../update/proses_edit_pelanggan.php";
     break;
}
// include_once "../template/konten.php"; //dinamis
include_once "../template/footer.php";
//ini bisa dipanggil berkali kali kayak function
?>