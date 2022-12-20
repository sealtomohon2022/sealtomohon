<?php

include "../../koneksi/koneksi.php";

<<<<<<< HEAD
session_start();


=======
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5
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
<<<<<<< HEAD
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
=======
        echo "<script>window.location.href='../hlmpangan.php';alert('Data tidak berhasil ditambahkan.')</script>";
    } else if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>window.location.href='../hlmpangan.php';alert('Salah upload gambar!')</script>";
    } else if ($ukuranGambar > 3000000) {
        echo "<script>window.location.href='../hlmpangan.php';alert('Ukuran gambar terlalu besar!!')</script>";
>>>>>>> d4f67b21f5945f1edac57159628320fa8f6044a5
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
