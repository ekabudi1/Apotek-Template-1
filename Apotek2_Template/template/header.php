<?php
include "../koneksi.php";
session_start();

if(!@$_SESSION['username']){
    echo "<script>alert('Login terlebih dahulu!!');window.location.href='../login.php';</script>";
}elseif(@$_SESSION['level']=='karyawan'){
    echo "<script>alert('anda karyawan, silahkan login terlebih dahulu');window.location.href='../login.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <link rel="stylesheet" href="view_obat.css">
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</head>

<body>