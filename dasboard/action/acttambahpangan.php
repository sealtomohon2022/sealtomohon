<?php

include "../../koneksi/koneksi.php";

$namapangan = htmlspecialchars($_POST['nama']);
$hargapangan = htmlspecialchars($_POST['harga']);
$pengubah =  htmlspecialchars($_POST['pengubah']);


$direktori = "../../assets/images/pangan/";
$nama_file = $_FILES['file']['name'];
$ukuranGambar = $_FILES['file']['size'];
$gambarError = $_FILES['file']['error'];
$ekstensiValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $nama_file);
$ekstensiGambar = strtolower(end($ekstensiGambar));

if (isset($_POST['proses'])) {

    if ($gambarError === 4) {
        echo "<script>window.location.href='../hlmpangan.php';alert('Data tidak berhasil ditambahkan.')</script>";
    } else if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>window.location.href='../hlmpangan.php';alert('Salah upload gambar!')</script>";
    } else if ($ukuranGambar > 3000000) {
        echo "<script>window.location.href='../hlmpangan.php';alert('Ukuran gambar terlalu besar!!')</script>";
    } else {
        $namaBaru = uniqid();
        $namaBaru .= ".";
        $namaBaru .= $ekstensiGambar;

        move_uploaded_file($_FILES['file']['tmp_name'], $direktori . $namaBaru);

        $data = mysqli_query($koneksi, "INSERT INTO `pangan` (`nama_pangan`, `harga_baru`, `nama_gambar`, `pengubah`) VALUES ('$namapangan', '$hargapangan', '$namaBaru', '$pengubah'); ");

        echo "<script>window.location.href='../hlmpangan.php';alert('Data Berhasil ditambahkan')</script>";
    }
}
