<?php


include "../../koneksi/koneksi.php";

session_start();

$namauser = $_POST['nama'];
$username= $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$data = mysqli_query($koneksi, "INSERT INTO `user` (`nama`, `username`, `password`, `role`) VALUES ('$namauser', '$username', '$password', '$role'); ");


$_SESSION['alert'] = "success";
$_SESSION['pesan'] = "Data Berhasil ditambahkan";

echo "
        <script>
          
            window.location.href='../hlmpegawai.php';
        </script>";

?>