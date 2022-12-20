<?php 

include "../../koneksi/koneksi.php";

session_start();

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `user` WHERE `user`.`id` = '$id'");


$_SESSION['alert'] = "success";
$_SESSION['pesan'] = "Data Berhasil dihapus";
echo "
        <script>
            window.location.href='../hlmpegawai.php';
        </script>";


?>