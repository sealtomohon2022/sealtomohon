<?php

include "../../koneksi/koneksi.php";

$namauser = $_POST['nama'];
$username= $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$data = mysqli_query($koneksi, "INSERT INTO `user` (`nama`, `username`, `password`, `role`) VALUES ('$namauser', '$username', '$password', '$role'); ");

echo "
        <script>
          
            window.location.href='../hlmpegawai.php';
        </script>";

?>