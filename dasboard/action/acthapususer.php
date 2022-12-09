<?php 

include "../../koneksi/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `user` WHERE `user`.`id` = '$id'");

echo "
        <script>
            window.location.href='../hlmpegawai.php';
        </script>";


?>