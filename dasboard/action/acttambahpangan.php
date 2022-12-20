<?php

include "../../koneksi/koneksi.php";

session_start();


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
        $_SESSION['alert'] = "gagal";
        $_SESSION['pesan'] = "Data tidak berhasil ditambahkan.";
        echo "<script>window.location.href='../hlmpangan.php';</script>";
    } else if (!in_array($ekstensiGambar, $ekstensiValid)) {
        $_SESSION['alert'] = "gagal";
        $_SESSION['pesan'] = "Salah upload gambar!";
        echo "<script>window.location.href='../hlmpangan.php';</script>";
    } else if ($ukuranGambar > 3000000) {
        $_SESSION['alert'] = "gagal";
        $_SESSION['pesan'] = "Ukuran gambar terlalu besar!!";
        echo "<script>window.location.href='../hlmpangan.php';a</script>";
    } else {
        $namaBaru = uniqid();
        $namaBaru .= ".";
        $namaBaru .= $ekstensiGambar;

        move_uploaded_file($_FILES['file']['tmp_name'], $direktori . $namaBaru);

        $data = mysqli_query($koneksi, "INSERT INTO `pangan` (`nama_pangan`, `harga_baru`, `nama_gambar`, `pengubah`) VALUES ('$namapangan', '$hargapangan', '$namaBaru', '$pengubah'); ");

    
        $_SESSION['alert'] = "success";
        $_SESSION['pesan'] = "Data Berhasil ditambahkan";
        echo "<script>window.location.href='../hlmpangan.php';</script>";
    }
}
