<?php

// $host = "localhost";
// $username = "root";
// $password = "";
// $database_name = "apotek_rpl1";

// $koneksi = mysqli_connect($host,$username,$password,$database_name);


$koneksi = mysqli_connect("localhost:3309","root","","apotek");

if(!$koneksi){
    die ("Koneksi Ke Database Gagal ". mysqli_connect_error($koneksi));
}


?>